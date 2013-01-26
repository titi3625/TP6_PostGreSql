<?php
class Reception {

	private $id;
	private $qteRecue;
	private $prix;
	
	public function _contruct($id) {
		$requete = $bdd->query('SELECT * FROM c_reception WHERE num_recept = "'.$id.'"');
		$resultat = $requete->fetchAll();
		$this->id = $resultat['num_recept'];
		$this->qteRecue = $resultat['qte_recue'];
		$this->prix = $resultat['prix_unitaire'];
		$requete->closeCursor();
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getQteRecue() {
		return $this->qteRecue;
	}

	public function setQteRecue($qteRecue) {
		$this->qteRecue = $qteRecue;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function setPrix($prix) {
		$this->prix = $prix;
	}
}