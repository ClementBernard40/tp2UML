<?php
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        $this->solde += $somme;
    }

    public function retrait($somme) {
        if ($somme < $this->solde) {
            $this->solde -= $somme;
        } else {
            echo "Fonds insuffisants pour le retrait.\n";
        }
    }

    public function affiche() {
        return "Le solde du compte bancaire de $this->nom est de $this->solde euros.\n";
    }
}
?>
