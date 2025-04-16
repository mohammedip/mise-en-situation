<?php


class Moto extends Vehicule {

    private $cylindree;

    public function __construct($cylindree,$id,$immatriculation,$marque,$modele,$prixJour,$disponible) {
        parent::__construct($id,$immatriculation,$marque,$modele,$prixJour,$disponible);

        $this->cylindree = $cylindree;
    }

    public function getType(): string{

        return $this->modele;
    }

 

}