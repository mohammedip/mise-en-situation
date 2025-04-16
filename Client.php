<?php




abstract class Client extends Personne{

    static public $numeroClient;
    protected array $reservations ;

    public function __construct($nom,$prenom,$email) {
        parent::__construct($nom,$prenom,$email);
        $this->numeroClient += 1;
    }

    public function afficherProfil(){

            echo "nom : " +$this->nom+"prenom : " +$this->prenom+
            "email : " +$this->email;
    
    }

    public function ajouterReservation(Reservation $r){

        array_push($this->reservations,$r);
    }

    public function getHistorique(){

        return $this->reservations;
    }

}