<?php
// require("./Personne.php");
require("./Client.php");
require("./User.php");
require("./Voiture.php");
require("./Commande.php");
require("./Light.php");

// echo $client->__toString();

// $user = new User("Mohamed", 32, "bmz@gmail.com", "pass");

// echo $user;


// echo $v;

// client
$client = new Client("ranya", 27, "Rabat");
$client2 = new Client("Yassine", 25, "Marrakech");
$client3 = new Client("BMZ", 32, "El Jadida");
$client4 = new Client("Taha", 20, "Montreal");
echo "nombre de client est " . Client::getNbre();

// voiture
$voiture = new Voiture("Benz", "Blue");
$voiture->info();

// Commande::PI;

$light = new Light();
$device = array($voiture, $light);

foreach ($device as $d) {
    $d->on();
    echo "\n";
    $d->of();
    echo "\n";
}

// commande
$cmd = new Commande(10, $client, $voiture, 12, 300000);
echo $cmd->getCommandeInfos();