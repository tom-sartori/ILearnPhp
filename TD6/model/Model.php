<?php

require_once File::build_path(array("config", "Conf.php"));

class Model {
	
	public static $pdo; 


	public static function Init() { 
		$hostname =  Conf::getHostname(); 
		$database_name = Conf::getDatabase(); 
		$login = Conf::getLogin();
		$password = Conf::getPassword(); 


		try {
				// Connexion à la base de données            
		// Le dernier argument sert à ce que toutes les chaines de caractères 
		// en entrée et sortie de MySql soit dans le codage UTF-8
			self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch(PDOException $e) {
			if (Conf::getDebug()) {
			    echo $e->getMessage(); // affiche un message d'erreur
			} else {
				echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
			}
			die(); 
		}
	}

    public static function selectAll() {
        $table_name = static::$object;
        $class_name = "Model" . ucfirst($table_name);

        $rep = Model::$pdo->query('select * from ' . $table_name);
        $rep->setFetchMode(PDO::FETCH_CLASS, $class_name);  // Pas oublier le try catch
        $tab = $rep->fetchAll();

        return $tab;
    }

    public static function select($primary_value) {
	    $table_name = static::$object;
	    $class_name = "Model" . ucfirst($table_name);
	    $primary_key = static::$primary;

        $sql = "SELECT * from " . $table_name . " WHERE " . $primary_key . "=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);

        $values = array(
            "nom_tag" => $primary_value,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
        $tab = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab))
            return false;
        return $tab[0];
    }

    public static function delete($primary_value) {
        $table_name = static::$object;
        $class_name = "Model" . ucfirst($table_name);
        $primary_key = static::$primary;

        $sql = "DELETE FROM " . $table_name . " WHERE " . $primary_key . " =:valeur";
        try {
            $req_prep = Model::$pdo->prepare($sql);
            $value = array(
                "valeur"=> $primary_value
            );
            $req_prep->execute($value);
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
Model::Init(); 
?>