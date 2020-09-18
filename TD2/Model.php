<?php

require_once 'Conf.php';

class Model {
	
	public static $pdo; 


	public static function Init() { 
		$hostname =  Conf::getHostname(); 
		$database_name = Conf::getDatabase(); 
		$login = Conf::getLogin();
		$password = Conf::getPassword(); 

/*
		try {
			self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);
		} catch(PDOException $e) {
			echo $e->getMessage();
			die(); 
		}
*/

		// Connexion à la base de données            
		// Le dernier argument sert à ce que toutes les chaines de caractères 
		// en entrée et sortie de MySql soit dans le codage UTF-8
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}
}
Model::Init(); 
?>