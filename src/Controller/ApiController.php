<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{   

    public function callApi($idFlight)
    {
        $queryString = http_build_query([
        'access_key' => '2bb47cef109df0fa5a5512886e6c0dee'
        ]);
        
        $ch = curl_init('http://api.aviationstack.com/v1/flights?' . $queryString . '&flight_iata='. $idFlight);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $json = curl_exec($ch);
        curl_close($ch);
        

        $api_result = json_decode($json, true);
        
        if(!$api_result)
        {
            return false; // problème de connection
        }
        else
        { 
            $nbrResult = count($api_result['data']);
            if($nbrResult == 0)
            {
                return false; //Ecrit n'importe quoi
            }
            else
            {
                $nbrResultChecked = 0;
                $resultExist = false;
                while($nbrResultChecked <= $nbrResult-1)
                {
                    if($api_result['data'][$nbrResultChecked]['departure']['airport'] == 'Entzheim')//Entzheim
                    {
                        $departureDate[] = $api_result['data'][$nbrResultChecked]['departure']['scheduled'];
                        $destination[] = $api_result['data'][$nbrResultChecked]['arrival']['airport'] . ' ' . $api_result['data'][$nbrResultChecked]['arrival']['iata'];

                        $departureDate[$nbrResultChecked] = str_replace('-','/',$departureDate[$nbrResultChecked]);
                        $departureDate[$nbrResultChecked] = str_replace('T',' à ',$departureDate[$nbrResultChecked]);
                        $departureDate[$nbrResultChecked] = substr($departureDate[$nbrResultChecked], 0, -9);

                        $nbrResultChecked++;
                        $resultExist = true;
                    }
                    else
                    {
                        $nbrResultChecked++;
                    }
                }
            }
            if(!$resultExist)
            {
                return false; //Le vol existe mais ne part pas de SXB
            }
            return $resultApi = [$departureDate, $destination];
        }
    }
}