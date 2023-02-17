<?php
require_once("./Personne.php");
class Client extends Personne
{
    public string $adresse;

    private static int $nbre = 0;

    public function __construct(string $nom, int $age, string $address)
    {
        parent::__construct($nom, $age);
        $this->adresse = $address;
        self::$nbre++;
    }


    public function __toString()
    {
        return "Client " . parent::__toString() . " Adresse: " . $this->adresse . "\n";
    }

    public static function getNbre()
    {
        return self::$nbre;
    }

}