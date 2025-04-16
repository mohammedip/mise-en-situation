<?php


abstract class Vehicule implements ReservableInterface{
    protected $id;
    protected $immatriculation;
    protected $marque;
    protected $modele;
    protected $prixJour;
    protected $disponible;

    public function __construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible) {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = $disponible;

    }

    public function afficherDetails(){
        echo "immatriculation : " +$this->immatriculation+"marque : " +$this->marque+
        "prixJour : " +$this->prixJour+"disponible : " +$this->disponible;

    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation
    {
        $reservations=new Reservation();

        
        return $reservations; 
    }


public function calculerPrix(int $jours): float
{
    $totalPrix = $this->prixJour * $jours;
    return $totalPrix;

}


public function estDisponible(): bool{

    return $this->disponible;

}


 abstract public function getType(): string;

}