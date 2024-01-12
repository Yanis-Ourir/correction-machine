<?php

class Vehicule
{
    private $pneus;
    private $marque;
    private $motorisation;
    private $couleur;

    public function __construct($marque, $couleur) {
        $this->marque = $marque;
        $this->couleur = $couleur;
    }



    public function setPneus($pneus) {
        $this->pneus = $pneus;
    }

    public function getPneus() {
        return $this->pneus;
    }

    public function setMotorisation($motorisation) {
        $this->motorisation = $motorisation;
    }

    public function getMotorisation() {
        return $this->motorisation;
    }

    public function drive() {
        echo "Je roule";
    }

    public function freiner() {
        echo "je freine";
    }


}



class Moto extends Vehicule { // On définit une classe Moto qui hérite de la classe Vehicule

}

class Velo extends Vehicule { // On définit une classe Velo qui hérite de la classe Vehicule

}

class Voiture extends Vehicule { // On définit une classe Voiture qui hérite de la classe Vehicule

}

$moto = new Moto("Yamaha", "Rouge"); // On instancie un objet de la classe Moto
$moto->setPneus(2); // On définit le nombre de pneus
$moto->setMotorisation("Essence"); // On définit la motorisation
echo $moto->getPneus(); // On affiche le nombre de pneus
echo "<br>";
echo $moto->getMotorisation();
echo "<br>";
$moto->drive();


