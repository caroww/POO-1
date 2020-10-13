<?php

// Bicycle.php

class Bicycle
{
    /**
    * @var string
    */
    private $color;

    /**
    * @var integer
    */
    private $currentSpeed;

    /**
    * @var integer
    */
    private $nbSeats;

    /**
    * @var integer
    */
    private $nbWheels;


    
    public function forward() :string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

  public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;

   }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

     /**
     * @return string
     */
    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }

        /**
     * @param int $currentSpeed
     * @return void
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }

    }
}
