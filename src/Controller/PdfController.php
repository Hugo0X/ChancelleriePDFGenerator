<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\PdfEntity;
use App\Form\PdfGenerator;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use App\Controller\ApiController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PdfController extends AbstractController
{   
    // ! back register old data in the form ! (( script in built ))

    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    /**
     * @Route("/create", name="app_pdf_create")
     */
    public function createPdf(\Knp\Snappy\Pdf $snappy): Response
    {
        if($this->session->get('nextStep') != 'create')
        {
            $this->session->invalidate();
            return $this->redirectToRoute('app_pdf_home');
        }
        
        $html = $this->renderView('pages/templatePdf.html.twig');

        $lastName = $this->session->get('lastName');

        $this->session->invalidate();

        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            'droitDeChancellerie_'. $lastName .'.pdf'
            );
    }

    /**
     * @Route("/", name="app_pdf_home")
     */
    public function formPdf(Request $request): Response
    {    
        $pdf = new PdfEntity;
        $form = $this->createForm(PdfGenerator::class, $pdf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pdf = $form->getData();
            
            $pdf = $pdf->allGetters();

            foreach($pdf as $aPdf => $val)
            {
                $this->session->set($aPdf,$val);
            }


            $apiController = new ApiController;
            
            $resultApi = $apiController->callApi($pdf['idFlight']);           
            
            if(!$resultApi) // maybe use switch instead
            {
                $this->session->set('nextStep','flightNotFound');
                return $this->render('pages/formFlightoption.html.twig');      
            }
            elseif(count($resultApi[1]) > 1)
            {
                $this->session->set('nextStep','severalFlightFound');
                return $this->render('pages/formSeveralFlightFound.html.twig', ['apis' =>  $resultApi]);
            }
            elseif($resultApi)
            {
                $this->session->set('dateTimeDepartureFlight', $resultApi[0][0]);
                $this->session->set('destinationFlight', $resultApi[1][0]);
                
                $this->session->set('nextStep','create');
                return $this->render('pages/preview.html.twig');
            }
            else // normalement n'arrive pas
            {
                $this->session->invalidate();
                return $this->redirectToRoute('app_pdf_home');
            }
        }

        return $this->render('pages/form.html.twig', [
            'form' => $form->createView(), 
        ]);
    }

    /**
     * @Route("/formFlightNotFound", name="app_pdf_formFlightNotFound", methods={"POST"})
     */
    public function formFlightNotFound(Request $request): Response
    {
        if($this->session->get('nextStep') != 'flightNotFound' || !$this->isCsrfTokenValid('pdf_FlightNotFound', $request->request->get('csrf_token')))
        {
            $this->session->invalidate();
            return $this->redirectToRoute('app_pdf_home');
        }

        $datas = $request->request->all();

        htmlspecialchars($datas['dateTimeDepartureFlight'] = $datas['dateDepartureFlight'] .' à '. $datas['hour'] .'h'. $datas['minute']);
            unset($datas['dateDepartureFlight']);
            unset($datas['hour']);
            unset($datas['minute']);

        if(strlen($datas['dateTimeDepartureFlight']) != 19 || strlen($datas['destinationFlight']) < 3 || strlen($datas['destinationFlight']) > 50 || strlen($datas['destinationFlight']) != (5 || 6))
        {
            $this->session->invalidate();
            return $this->redirectToRoute('app_pdf_home');
        }

        foreach($datas as $data => $val)
        {
            $this->session->set($data,$val);
        }

        $this->session->set('nextStep','create');
        return $this->render('pages/preview.html.twig');
    }

    /**
     * @Route("/formSeveralFlightFound", name="app_pdf_formSeveralFlightFound", methods={"GET"})
     */
    public function formSeveralFlightFound(Request $request): Response
    {
        if($this->session->get('nextStep') != 'severalFlightFound' || !$this->isCsrfTokenValid('flightFound', $request->query->get('token')))
        {
            $this->session->invalidate();
            return $this->redirectToRoute('app_pdf_home');
        }
        
        htmlspecialchars($datas['dateTimeDepartureFlight'] = $request->query->get('dateTimeDepartureFlight')); // must be simplify
        htmlspecialchars($datas['destinationFlight'] = $request->query->get('destinationFlight'));

        if(strlen($datas['dateTimeDepartureFlight']) != 19 || strlen($datas['destinationFlight']) < 3 || strlen($datas['destinationFlight']) > 50)
        {
            $this->session->invalidate();
            return $this->redirectToRoute('app_pdf_home');
        }

        foreach($datas as $data => $val)
        {
            $this->session->set($data, $val);
        }

        $this->session->set('nextStep','create');
        return $this->render('pages/preview.html.twig');
    }
 
}