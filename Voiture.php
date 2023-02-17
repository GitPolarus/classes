<?php
require_once("./Vehicule.php");
class Voiture extends Vehicule
{

    public string $marque;

    public function __construct(string $marque, string $color)
    {
        $this->marque = $marque;
        $this->color = $color;
    }

    public function __toString()
    {
        return "Marque : " . $this->marque . " de Color " . $this->color;
    }

    public function info()
    {

        echo "Hello I am A car \n";
    }


    /**
     * @return mixed
     */
    public function on()
    {
        echo "The car is On";
    }

    /**
     * @return mixed
     */
    public function of()
    {
        echo "The car is Of";
    }
}