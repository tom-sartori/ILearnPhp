<?php 
class Trajet {
	private $id; 
	private $depart; 
	private $arrivee; 
	private $date; 
	private $nbPlaces; 
	private $prix; 
	private $conducteurLogin; 


	public function __construct($data) {
		if (!is_null($data)) {
			foreach ($data as $key => $value) {
				$this->$key = $value;
			}
		}
	}

	public function get($attribut) {
		return $this->$attribut; 
	}

	public function set($attribut, $valeur) {
		$this->$attribut = $valeur; 
	}

	public static function getAllTrajets() {
		require_once 'Model.php'; 

		$rep = Model::$pdo-> query('select * from trajet');  
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
		$tab_traj = $rep->fetchAll();

		return $tab_traj; 
	}
}

?> 