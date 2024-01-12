<?php

class MachineACafe {
    private $marque;
    private $enFonction;
    private $dosette = false;
    private $prixCafe = 1;

    public function __construct($marque) { //
        $this->marque = $marque;
    }

    public function allumage($state) {
        $this->enFonction = $state; // On passe la variable enFonction à true ou false, si true la machine est en fonction, si false la machine est en arrêt
        if($state) {
            echo "<p>" . $this->marque . " est en fonction </p>";
        } else {
            echo "<p>" . $this->marque . " est en arrêt </p>";
        }
    }

    public function mettreUneDosette() { // Met une dosette dans la machine
        $this->dosette = true; // La machine a une dosette donc on passe la variable à true
        echo "<p>Vous avez mis une dosette</p>";
    }

    public function ajouterSucre($sucre) { // Ajoute du sucre dans le café
        if($sucre) {
            echo '<p>Je mets ' . $sucre . ' sucre(s) dans le café</p>';
        } else {
            echo '<p>Je ne mets pas de sucre dans le café</p>';
        }
    }

    public function monnayeur($argent) { // Récupère l'argent et retourne la monnaie
        if($argent >= $this->prixCafe) {
            $monnaie = $argent - $this->prixCafe;
            echo "<p>Vous avez mis $argent euros dans la machine, " . $this->marque . " prends " . $argent . " euros et vous rends " . ($argent - $this->prixCafe) . " euros </p>";
            return $monnaie; // Retourne la monnaie si l'argent est suffisant
        } else {
            $monnaie = $argent - $this->prixCafe;
            echo "<p>Je ne peux pas prendre " . $argent . " euros, il me faut " . $this->prixCafe . " euros </p>";
            return $monnaie; // Retourne la monnaie si l'argent est insuffisant
        }
    }

    public function faireDuCafe() {
        if($this->dosette) {
            echo "<p>Le café est prêt</p>";
        }
    }

    public function getEnFonction() {
        return $this->enFonction;
    }


}

$machine = new MachineACafe("Senseo");
$machine->allumage(true);
if($machine->getEnFonction()) { // Si la machine est en fonction on peut faire tout le reste
    $machine->mettreUneDosette();
    $machine->ajouterSucre(2);
    $monnaieRendu = $machine->monnayeur(2);
    if($monnaieRendu >= 0) { // Si la monnaie rendu est supérieur ou égal à 0 on peut faire du café car on a assez d'argent
        $machine->faireDuCafe();
    }
}