<?php

class Personne
{
    protected string $nom;
    protected int $age;

    public function __construct(string $nom, int $age)
    {
        $this->nom = strtoupper($nom);
        $this->age = $age;
    }

    public function setNom(string $nom)
    {
        $this->nom = strtoupper($nom);
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function __toString()
    {
        return " Nom : " . $this->nom . " Age: " . $this->age;
    }


}