<?php
class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;

      
  // un constructeur
  public function __construct($m, $c, $i)  {
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
  } 
           
  // une methode d'affichage.
  public function afficher() {
    echo "Voiture : $this->marque de couleure : $this->couleur et d'immatriculation : $this->immatriculation. ";
  }
      
  // un getter      
  public function getMarque() {
       return $this->marque;  
  }
     
  // un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }


  public function getCouleur() {
    return $this->couleur; 
  }

  public function setCouleur($c) {
    $this->couleur = $c; 
  }

  public function getImmatriculation() {
    return $this->immatriculation; 
  }

  public function setImmatriculation($i) {
    if (strlen($i) <= 8)
      $this->immatriculation = $i; 
    else 
      echo "Immatriculation invalide"; 
  }
}
?>

