<?php



class Agence{

    use LoggerTrait;

    protected $nom;
    protected  $ville ;   
    protected array $vehicules ;
    protected array $clients ;

    public function __construct($nom , $ville) {
        $this->nom = $nom;
        $this->ville = $ville;
    }

    public function getVehicules(){
        return $this->vehicules;
    }

    public function ajouterVehicule(Vehicule $v){

        // array_push($this->vehicules,$v);
        $this->vehicules+=$v;
    }


 public function rechercherVehiculeDisponible(string $type){
    if(in_array($type,$this->vehicules)){
        return true;
    }
    return false;

 }


public function enregistrerClient(Client $c){

    array_push($this->clients,$c);
}


public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation{

    $reservations=new Reservation();

        
    return $reservations; 
}

}