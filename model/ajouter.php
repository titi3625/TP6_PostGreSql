<?php


public function delete($cond) {
	$sql = "INSERT INTO ".$this->table." WHERE ";
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
		$ligne = $requete->fetchAll();
		return $ligne;
	}
	catch(PDOException $e) {
		echo "erreur : ".$e;
	}
}