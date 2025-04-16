<?php

include_once ("LoggerTrait.php");
include_once ("Agence.php");
include_once ("Personne.php");
include_once ("ReservableInterface.php");
include_once ("Client.php");
include_once ("Vehicule.php");
include_once ("Moto.php");
include_once ("Reservation.php");
include_once ("Voiture.php");
include_once ("Camion.php");

$agence1 = new Agence("agence1","Rabat");
$agence2 = new Agence("agence2","Fes");

$moto = new Moto("9 cylindres","1","1111-m-12","sh","2014","50",true);
$camion = new Camion("13 cylindres","2","5555-p-45","Mercedes"," Actros 4163 SLT","300",true);
$voiture = new Voiture("7 cylindres","2","4587-h-65","Mercedes-Benz","class-A","500","Fes",false);

$agence1->ajouterVehicule($moto);
$agence1->ajouterVehicule($camion);

$agence2->ajouterVehicule($voiture);


$client1 = new Client("reida","mohammed","reid@gmail.com");
$client2 = new Client("reida","farid","farid@gmail.com");

$agence1->enregistrerClient($client1);
$agence1->enregistrerClient($client2);

echo $agence1->getVehicules();


