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


}