<?php


class Camion extends Vehicule{


    private $capaciteTonnage;

    public function __construct($capaciteTonnage,$id,$immatriculation,$marque,$modele,$prixJour,$disponible) {
        parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);
        $this->capaciteTonnage = $capaciteTonnage;
    }

    public function getType(): string{

        return $this->modele;
    }



}