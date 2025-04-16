<?php


class Voiture extends Vehicule {

    private $nbPortes;
    private $transmission;

    public function __construct($nbPortes,$transmission,$id,$immatriculation,$marque,$modele,$prixJour,$disponible) {

        parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);

        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }

    public function getType(): string{

        return $this->modele;
    }

   

}