<?php 
class Utilisateur {

	private $login; 
	private $nom; 
	private $prenom; 

	public function __construct($l, $n, $p) {
		if (!is_null($l) && !is_null($n) && !is_null($p)) {
			$this->login = $l; 
			$this->nom = $n; 
			$this->prenom = $p; 
		}
	}

	public function afficher() {
		echo "Utilisateur : $this->nom $this->prenom"; 
	}

	public function get($attribut) {
		return $this->$attribut; 
	}

	public function set($attribut, $valeur) {
		$this->$attribut = $valeur; 
	}

	public static function getAllUtilisateurs() {
		require_once 'Model.php'; 

		$rep = Model::$pdo-> query('select * from utilisateur');  
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
		$tab_util = $rep->fetchAll();

		return $tab_util; 
	}
}

?> 