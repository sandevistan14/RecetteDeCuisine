<?php
class page
{
    public $titre;
    public $ListeIngrédient;
    public $description;
    public $Recette;

    public function __construct() { }

    public function setTitre($titre){
        $this->titre = $titre;
     }
     public function getTitre(){
        return $this->titre;
     }
}

class ingredient
{
    public $nom;
    public $quantite;

    public function __construct() { }
}

?>