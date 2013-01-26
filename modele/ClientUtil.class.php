<?php

class ClientUtil {

	public static $tableauClient = array();

	public function ajouterClient(Client $client) {
		if(!isset(self::$tableauClient[$client->id])
        { 
            self::$tableauClient[$client->id] = $client;
        }
	}

	public function supprimerClient(Client $client) {
		if(!isset(self::$tableauClient[$client->id])
		{

		}
	}

	public static function chargerPizza($pId, $pNom,$pAdresse,$pCodePostal,$pVille)
    {
        $client = new Client($pId, $pNom, $pAdresse, $pCodePostal, $pVille);
        self::ajouterPizza($client);
    }

    public static function listerNomsDesPizzas()
    {
        foreach(self::$tableauClient as $id => $objetClient)
        {
            echo $objetClient->id . " : " . $objetClient->nom . PHP_EOL; 
        }
    }
}
$client = array();
$requete = $bdd->query('SELECT * FROM client WHERE num_client = "'.$id.'"');
while($resultat = $requete->fetch()) {
	
}

$requete->closeCursor();