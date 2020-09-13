<?php 
class Utilisateur {

	private $login; 
	private $nom; 
	private $prenom; 

	public function __construct($l, $n, $p) {
		$this->login = $l; 
		$this->nom = $n; 
		$this->prenom = $p; 
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
}
?> 