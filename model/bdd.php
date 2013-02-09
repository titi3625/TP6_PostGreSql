<?php
	try
	{
		$bdd = new PDO('pgsql:host=172.17.122.178;dbname=GestionCommandes', 'thibault', 'test');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

?>