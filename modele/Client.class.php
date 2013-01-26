<?php
class Client {

	private $id;
	private $nom;
	private $adresse;
	private $codePostal;
	private $ville;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNom() {
		return $this->nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getAdresse() {
		return $this->adresse;
	}

	public function setAdresse($adresse) {
		$this->adresse = $adresse;
	}

	public function getCodePostal() {
		return $this->codePostal;
	}

	public function setCodePostal($codePostal) {
		$this->codePostal = $codePostal;
	}

	public function getVille() {
		return $this->ville;
	}

	public function setVille($ville) {
		$this->ville = $ville;
	}
}