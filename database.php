<?php

class database {
	
	private static function connect() { // cette fonction permet de se connecter à la BD
		$pdo = new PDO('mysql:host=localhost:3306;dbname=exo3_ajax;charset=utf8', 'root',''); // pour BD locale
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	
	public static function query($query, $parametres = array()){ // cette fonction va aller chercher les élements dans la BD
		$statement = self::connect()->prepare($query);
		$statement ->execute($parametres);


		if(explode(' ', $query)[0]== 'SELECT'){
			$data = $statement->fetchAll();
			return $data;	
		}
	}
}

?>