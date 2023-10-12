<?php
class Personne {
    public $nom;
    protected $revenu;

    public function __construct($nom, $revenu) {
        $this->nom = $nom;
        $this->revenu = $revenu;
    }
}
?>
