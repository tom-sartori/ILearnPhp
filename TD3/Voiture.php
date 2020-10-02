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
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');  // Pas oublier le try catch
    $tab_voit = $rep->fetchAll();

    return $tab_voit; 
  }

  public static function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
    $req_prep = Model::$pdo->prepare($sql);

    $values = array(
        "nom_tag" => $immat,
      //nomdutag => valeur, ...
    );
    // On donne les valeurs et on exécute la requête
    $req_prep->execute($values);

    // On récupère les résultats comme précédemment
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit))
      return false;
    return $tab_voit[0];
  }

  public function save() {
    require_once 'Model.php';

    $sql = "INSERT INTO voiture  VALUES (:tag_i , :tag_m, :tag_c)";
    $req_prep = Model::$pdo->prepare($sql);
    // try catch exception 23000
    $values = array(
        "tag_m" => $this->marque,
      "tag_c" => $this->couleur,
      "tag_i" => $this->immatriculation
    );
    $req_prep->execute($values);
  }
}
?>

