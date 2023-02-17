<?php
require_once("Voiture.php");
require_once("Client.php");
class Commande
{

    public Client $client;
    public Voiture $voiture;
    public int $quantity;
    public int $numero;

    public float $prix;

    const PI = 3.14;
    public function __construct(int $numero, Client $client, Voiture $voiture, int $qte, float $prix)
    {
        $this->numero = $numero;
        $this->client = $client;
        $this->voiture = $voiture;
        $this->quantity = $qte;
        $this->prix = $prix;
    }

    public function getCommandeInfos()
    {
        return "Commande N° $this->numero de " . $this->client->getNom() . " est une Voiture de $this->voiture de quantité $this->quantity et de prix Unitaire $this->prix";
    }


}