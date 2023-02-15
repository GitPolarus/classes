<?php
require_once("./Personne.php");
class Client extends Personne
{
    public string $adresse;

    public function __construct(string $nom, int $age, string $address)
    {
        parent::__construct($nom, $age);
        $this->adresse = $address;
    }


    public function __toString()
    {
        return "Client " . parent::__toString() . " Adresse: " . $this->adresse . "\n";
    }

}