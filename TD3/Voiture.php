<?php

class Voiture {
   
  private $marque;
  private $couleur;
  private $immatriculation;

      
  // un constructeur
public function __construct($m = NULL, $c = NULL, $i = NULL) {
  if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
    $this->marque = $m;
    $this->couleur = $c;
    $this->immatriculation = $i;
  }
}

           
  // une methode d'affichage.
  public function afficher() {
    echo "Voiture : $this->marque de couleur : $this->couleur et d'immatriculation : $this->immatriculation. <br>";
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

  public static function getAllVoitures() {
    require_once 'Model.php'; 

    $rep = Model::$pdo-> query('select * from voiture');  
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();

    return $tab_voit; 
  }
}
?>

