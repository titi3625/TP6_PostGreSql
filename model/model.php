<?php
class Model {

	private $table;
	protected $bdd;

	public function __construct($table) {
		
		$this->table = $table;

		try {
			$bdd = new PDO('pgsql:host=192.168.1.46;port=5432;dbname=GestionCommandes', 'thibault', 'test');
		}
		catch(PDOException $e) {
			die('Erreur : ' . $e->getMessage());
		}
		
	}


	// fonction qui fait une selection dans la bdd avec un champs et une condition facultative
	public function getPdo($field=null, $cond=null) {
		// si le parametre field n'est pas spécifié on insere une étoile  
		if($field == null) {
			$field = "*";
		}
		// insertion du début de la requête avec la variable $table
		$sql = 'SELECT "'.$field.'" FROM "'.$this->table.'"';
		// si la condition est nulle on termine la requête
		if($cond = null) {
			$sql .= ";";
		}
		else {
			// sinon on incremente la requête avec la condition appropriée
			$sql .= " WHERE ";
			switch ($this->table) {
				case "commande":
					$sql .= "num_com = $cond";
				break;
				case "produit":
					$sql .= "num_produit = ".$cond;
				break;
				case "client":
					$sql .= "num_client = ".$cond;
				break;
				case "reception":
					$sql .= "num_recept = ".$cond;
				break;
			}

			// on execute la requete et on renvoi un array;
			try {
				$requete = $bdd->query($sql);
				$ligne = $requete->fetchAll();
				return $ligne;
			}
			catch(PDOException $e) {
				echo "erreur : ".$e;
			}
						
		}
		
	}


	// fonction qui permet d'ajouter une entrée à partir d'un array
	public function ajouter($array) {

		// contruction de la requete à partir d'un array
		$sql = "INSERT INTO ".$this->table."(";
		foreach ($array as $key => $value) {
			$sql .= $key.",";
		}
		$sql = substr($sql, 0, strlen($sql)-1);
		$sql .= ") VALUES(";
		foreach ($array as $key => $value) {
			$sql .= $value.",";
		}
		$sql = substr($sql, 0, strlen($sql)-1);
		$sql .= ");";

		try {
			$requete = $bdd->exec($sql);
		}
		catch(PDOException $e) {
			echo "erreur : ".$e;
		}
	}


	// fonction qui permet de mettre à jour un enregistrement à partir d'un array
	public function update($array) {
		
	}


	// fonction qui permet de supprimer un enregistrement à partir de son id
	public function delete($cond) {
		$sql = "DELETE FROM ".$this->table." WHERE ";
		switch ($this->table) {
					case "commande":
						$sql .= "num_com = ".$cond;
					break;
					case "produit":
						$sql .= "num_produit = ".$cond;
					break;
					case "client":
						$sql .= "num_client = ".$cond;
					break;
					case "c_reception":
						$sql .= "num_recept = ".$cond;
					break;
		}
		try {
			$requete = $bdd->exec($sql);
		}
		catch(PDOException $e) {
			echo "erreur : ".$e;
		}
	}

}