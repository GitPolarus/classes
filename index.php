<?php
// require("./Personne.php");
require("./Client.php");
require("./User.php");
require("./Voiture.php");
require("./Commande.php");

// echo $client->__toString();

// $user = new User("Mohamed", 32, "bmz@gmail.com", "pass");

// echo $user;


// echo $v;

// client
$client = new Client("ranya", 27, "Rabat");

// voiture
$voiture = new Voiture("Benz", "Blue");

// commande
$cmd = new Commande(10, $client, $voiture, 12, 300000);
echo $cmd->getCommandeInfos();