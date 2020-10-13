<?php

class Car {
    /**
    * @var integer
    */
    private $nbWheels;

    /**
       * @var integer
       */
    private $currentSpeed;

    /**
       * @var string
       */
    private $color;

    /**
       * @var integer
       */
    private $nbSeats;

    /**
       * @var string
       */
    private $energy;

    /**
       * @var string
       */
    private $energyLevel;


    //Function

    public function __construct(string $color, int $nbSeats , string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    
    }

    public function forward() :string
    {
    $this->currentSpeed = 15;
    return "Go !";
    }


    public function brake() :string
        {
        $sentence = "";
     while ($this->currentSpeed > 0) {
         $this->currentSpeed--;
         $sentence .= "Brake !!!";
        }
     $sentence .= "I'm stopped !";
     return $sentence;
        }


    public function start() :string
    {
        if ($this->currentSpeed ===0 ) {
            $this->currentSpeed=5;
            return "Start !";
            }else{
            return "No need to start!";
            }
        
    }


    public function getNbWheels() : int
    {
        return $this->nbWheels;
    }


    public function getCurrentSpeed() : int
    {
        return $this->currentSpeed;
    }


    public function getColor() : string
    {
        return $this->color;
    }


    public function getNbSeats() : int
    {
        return $this->nbSeats;
    }


    public function getEnergy() :int
    {
        return $this->energy;
    }


    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

}
 
