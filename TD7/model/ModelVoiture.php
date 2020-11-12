<?php
require_once (File::build_path(array("model", "Model.php"))); 

class ModelVoiture extends Model {

  private $marque;
  private $couleur;
  private $immatriculation;
  protected static $object = 'voiture';
  protected static $primary = 'immatriculation';


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
  $rep = Model::$pdo-> query('select * from voiture');  
    $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');  // Pas oublier le try catch
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
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
    $tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
    if (empty($tab_voit)) 
      return false;
    return $tab_voit[0];
  }

  public function save(){
   $sql = "INSERT INTO voiture VALUES (:immat,:marque,:couleur)";

   try {
     $req_prep = Model::$pdo->prepare($sql);
     $value = array(
       "immat"=>$this->immatriculation,
       "marque"=>$this->marque,
       "couleur"=>$this->couleur,
     );
     $req_prep->execute($value);
     return true;
   }
   
   catch (PDOException $e) {
     if($e->getCode()==23000){
       return false;
     }else {
       echo $e->getMessage();
     }
     die();
   }
 }

 public static function deleteByImmat($immat) { 
   $sql = "DELETE FROM voiture WHERE immatriculation=:immat";
   try {
     $req_prep = Model::$pdo->prepare($sql);
     $value = array(
      "immat"=> $immat
    );
     $req_prep->execute($value);
   }
   catch (PDOException $e) {
     echo $e->getMessage();
   }

 }

 public static function update($data) {
     $sql = "UPDATE voiture SET couleur = :couleur, marque = :marque  WHERE immatriculation=:immat";
   try {
     $req_prep = Model::$pdo->prepare($sql);
     $value = array(
      "immat"=> $data['immatriculation'], 
      "couleur" => $data['couleur'], 
      "marque" => $data['marque']
    );
     $req_prep->execute($value);
     return true; 
   }
   catch (PDOException $e) {
     echo $e->getMessage();
     return false; 
   }
 }
}

?>

