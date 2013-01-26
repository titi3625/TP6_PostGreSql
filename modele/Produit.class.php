<?php
class Produit {

	private $id;
	private $designation;
	private $prix;
	private $qteStock;
	private $qteReservee;
	private $qteCommandee;
	private $alerteStock;

	public function _contruct($id) {
		$requete = $bdd->query('SELECT * FROM produit WHERE num_produit = "'.$id.'"');
		$resultat = $requete->fetchAll();
		$this->id = $resultat['num_client'];
		$this->designation = $resultat['designation'];
		$this->prix = $resultat['prix_unitaire'];
		$this->qteStock = $resultat['qte_stock'];
		$this->qteReservee = $resultat['qte_reservee'];
		$this->qteCommandee = $resultat['qte_commandee'];
		$this->alerteStock = $resultat['alerte_stock'];
		$requete->closeCursor();
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getDesignation() {
		return $this->designation;
	}

	public function setDesignation($designation) {
		$this->designation = $designation;
	}

	public function getPrix() {
		return $this->prix;
	}

	public function setPrix($prix) {
		$this->prix = $prix;
	}

	public function getQteStock() {
		return $this->qteStock;
	}

	public function setQteStock($qteStock) {
		$this->qteStock = $qteStock;
	}

	public function getQteReservee() {
		return $this->qteReservee;
	}

	public function setQteReservee($qteReservee) {
		$this->qteReservee = $qteReservee;
	}

	public function getQteCommandee() {
		return $this->qteCommandee;
	}

	public function setQteCommandee($qteCommandee) {
		$this->qteCommandee = $qteCommandee;
	}

	public function getAlerteStock() {
		return $this->alerteStock;
	}

	public function setAlerteStock($alerteStock) {
		$this->alerteStock = $alerteStock;
	}
}