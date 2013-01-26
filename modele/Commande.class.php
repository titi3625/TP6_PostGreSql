<?php
class Commande {

	private $id;
	private $date;
	
	public function _contruct($id) {
		$requete = $bdd->query('SELECT * FROM commande WHERE num_com = "'.$id.'"');
		$resultat = $requete->fetchAll();
		$this->id = $resultat['num_com'];
		$this->date = $resultat['date_com'];
		$requete->closeCursor();
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
	}
}