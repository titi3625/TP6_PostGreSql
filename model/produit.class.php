<?php
require_once('model.php');

class Produit extends Model {
	
	public function __construct() {
		parent::__construct('produit');
	}
}
