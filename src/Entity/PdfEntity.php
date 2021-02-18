<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Type;

class PdfEntity
{   
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $firstName;

    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )     
     */
    protected $lastName;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $dateBorn;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $placeBorn;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     */
    protected $gender;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $nationality;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 70,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $address;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $job;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $dateControl;
     
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $timeControl;
    
    // /**
    //  * @Assert\NotBlank(message="PdfEntity.not_blank")
    //  */
    // protected $dateDepartureFlight;

    // /**
    //  * @Assert\NotBlank(message="PdfEntity.not_blank")
    //  */
    // protected $timeDepartureFlight;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 5,
     *      max = 6,
     *      minMessage = "La longueur doit être de {{ limit }} caractères",
     *      maxMessage = "La longueur doit être de {{ limit }} caractères",
     *      allowEmptyString = false
     * )
     */
    protected $idFlight;
    
    // /**
    //  * @Assert\NotBlank(message="PdfEntity.not_blank")
    //  * @Assert\Type("string")
    //  * @Assert\Length(
    //  *      min = 2,
    //  *      max = 50,
    //  *      minMessage = "PdfEntity.minLenght",
    //  *      maxMessage = "PdfEntity.maxLenght",
    //  *      allowEmptyString = false
    //  * )
    //  */
    // protected $destinationFlight;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 5,
     *      max = 30,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $idPassport;

    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $countryPassport;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $dateMaxValadidy;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 5,
     *      max = 30,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $idVisa;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     */
    protected $typeVisa;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $nameVisa;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $dateDelevery;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $countryVisa;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     */
    protected $dateEntry;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     */
    protected $typeEntry;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     */
    protected $lenghtStay;
    
    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("int")
     * @Assert\Length(
     *      min = 1,
     *      max = 7,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $penality;

    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     */
    protected $userGrade;

    /**
     * @Assert\NotBlank(message="PdfEntity.not_blank")
     * @Assert\Type("string")
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "PdfEntity.minLenght",
     *      maxMessage = "PdfEntity.maxLenght",
     *      allowEmptyString = false
     * )
     */
    protected $userFullName;

    public function id()
    {
        return $this->$id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function firstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function lastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function dateBorn()
    {
        return $this->dateBorn;
    }

    public function setDateBorn($dateBorn)
    {
        $this->dateBorn = $dateBorn;
    }

    public function placeBorn()
    {
        return $this->placeBorn;
    }

    public function setPlaceBorn($placeBorn)
    {
        $this->placeBorn = $placeBorn;
    }

    public function gender()
    {
        return $this->gender;
    }

    public function setGender($set)
    {
        $this->gender = $set;
    }
    
    public function nationality()
    {
        return $this->nationality;
    }

    public function setNationality($set)
    {
        $this->nationality = $set;
    }

    public function address()
    {
        return $this->address;
    }

    public function setAddress($set)
    {
        $this->address = $set;
    }

    public function job()
    {
        return $this->job;
    }

    public function setJob($set)
    {
        $this->job = $set;
    }

    public function dateControl()
    {
        return $this->dateControl;
    }

    public function setDateControl($set)
    {
        $this->dateControl = $set;
    }

    public function timeControl()
    {
        return $this->timeControl;
    }

    public function setTimeControl($set)
    {
        $this->timeControl = $set;
    }

    // public function dateDepartureFlight()
    // {
    //     return $this->dateDepartureFlight;
    // }

    // public function setDateDepartureFlight($set)
    // {
    //     $this->dateDepartureFlight = $set;
    // }

    // public function timeDepartureFlight()
    // {
    //     return $this->timeDepartureFlight;
    // }

    // public function setTimeDepartureFlight($set)
    // {
    //     $this->timeDepartureFlight = $set;
    // }

    public function idFlight()
    {
        return $this->idFlight;
    }

    public function setIdFlight($set)
    {
        $this->idFlight = $set;
    }

    // public function destinationFlight()
    // {
    //     return $this->destinationFlight;
    // }

    // public function setDestinationFlight($set)
    // {
    //     $this->destinationFlight = $set;
    // }

    public function idPassport()
    {
        return $this->idPassport;
    }

    public function setIdPassport($set)
    {
        $this->idPassport = $set;
    }

    public function countryPassport()
    {
        return $this->countryPassport;
    }

    public function setCountryPassport($set)
    {
        $this->countryPassport = $set;
    }

    public function dateMaxValadidy()
    {
        return $this->dateMaxValadidy;
    }

    public function setDateMaxValadidy($set)
    {
        $this->dateMaxValadidy = $set;
    }

    public function idVisa()
    {
        return $this->idVisa;
    }

    public function setIdVisa($set)
    {
        $this->idVisa = $set;
    }

    public function typeVisa()
    {
        return $this->typeVisa;
    }

    public function setTypeVisa($set)
    {
        $this->typeVisa = $set;
    }

    public function nameVisa()
    {
        return $this->nameVisa;
    }

    public function setNameVisa($set)
    {
        $this->nameVisa = $set;
    }

    public function dateDelevery()
    {
        return $this->dateDelevery;
    }

    public function setDateDelevery($set)
    {
        $this->dateDelevery = $set;
    }

    public function countryVisa()
    {
        return $this->countryVisa;
    }

    public function setCountryVisa($set)
    {
        $this->countryVisa = $set;
    }

        public function dateEntry()
    {
        return $this->dateEntry;
    }

    public function setDateEntry($set)
    {
        $this->dateEntry = $set;
    }

    public function typeEntry()
    {
        return $this->typeEntry;
    }

    public function setTypeEntry($set)
    {
        $this->typeEntry = $set;
    }

    public function lenghtStay()
    {
        return $this->lenghtStay;
    }

    public function setLenghtStay($set)
    {
        $this->lenghtStay = $set;
    }

    public function penality()
    {
        return $this->penality;
    }

    public function setPenality($set)
    {
        $this->penality = $set;
    }

    public function userGrade()
    {
        return $this->userGrade;
    }

    public function setUserGrade($set)
    {
        $this->userGrade = $set;
    }

    public function userFullName()
    {
        return $this->userFullName;
    }

    public function setUserFullName($set)
    {
        $this->userFullName = $set;
    }

    public function allGetters()
    {
        return
            [
                'firstName'             => $this->firstName(),
                'lastName'              => $this->lastName(),
                'dateBorn'              => $this->dateBorn()->format('d/m/Y'),
                'placeBorn'             => $this->placeBorn(),
                'gender'                => $this->gender(),
                'nationality'           => $this->nationality(),
                'address'               => $this->address(),
                'job'                   => $this->job(),
                'dateControl'           => $this->dateControl()->format('d/m/Y'),
                'timeControl'           => $this->timeControl()->format('H:i'),
                // 'dateDepartureFlight'   => $this->dateDepartureFlight()->format('d/m/Y'),
                // 'timeDepartureFlight'   => $this->timeDepartureFlight()->format('H:i'),
                'idFlight'              => $this->idFlight(),
                // 'destinationFlight'     => $this->destinationFlight(),
                'idPassport'            => $this->idPassport(),
                'dateMaxValadidy'       => $this->dateMaxValadidy()->format('d/m/Y'),
                'countryPassport'       => $this->countryPassport(),
                'idVisa'                => $this->idVisa(),
                'typeVisa'              => $this->typeVisa(),
                'nameVisa'              => $this->nameVisa(),
                'dateDelevery'          => $this->dateDelevery()->format('d/m/Y'),
                'countryVisa'           => $this->countryVisa(),
                'dateEntry'             => $this->dateEntry()->format('d/m/Y'),
                'typeEntry'             => $this->typeEntry(),
                'lenghtStay'            => $this->lenghtStay(),
                'penality'              => $this->penality(),
                'userGrade'             => $this->userGrade(),
                'userFullName'          => $this->userFullName(),
            ];
    }
}