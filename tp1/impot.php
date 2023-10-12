<?php 
require 'Personne.php';
class Impot extends Personne{
    const TAUX_IMPOT_MAX = 20/100;
    const TAUX_IMPOT_MIN = 15/100;

    public function __construct() {

    }



    public function CalculImpot($personne){
        if ( $personne->revenu >= 15000 ) {
            return $revenu = 15000 * self::TAUX_IMPOT_MIN + ($personne->revenu - 15000) * self::TAUX_IMPOT_MAX;

        } else {
            return $revenu = $personne->revenu * self::TAUX_IMPOT_MIN;
        }
    }
    

    public function AfficheImpot($personne){
        $impot = $this->CalculImpot($personne);
        return "Monsieur $personne->nom , votre impot est de " .$impot ." euros";
    }



};




?>