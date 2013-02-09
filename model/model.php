<?php
class Model {

	private $table;
	protected $bdd;

	public function __construct($table) {
		
		$this->table = $table;

		try {
			$bdd = new PDO('pgsql:host=172.17.122.178;dbname=GestionCommandes', 'thibault', 'test');
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
		$sql = SELECT $field FROM "'.$this->table.'";
		// si la condition est nulle on termine la requête
		if($cond = null) {
			$sql .= ";";
		}
		else {
			// sinon on incremente la requête avec la condition appropriée
			$sql .= " WHERE ";
			switch ($this->table) {
				case "commande":
					$sql .= "num_com = $cond;";
				break;
				case "produit":
					$sql .= "num_produit = $cond;";
				break;
				case "client":
					$sql .= "num_client = $cond;";
				break;
				case "reception":
					$sql .= "num_recept = $cond;";
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

	require("ajouter.php");

	require("modifier.php");

	require("supprimer.php");

}