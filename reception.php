<!DOCTYPE HTML>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title>TP6 postgres pdo</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<center>
		<?php
		include_once('core.php');
		$reception = new Reception();
		$resultatReception = $reception->getPdo();			
		?>
		
		<h1>Réception</h1>
		<p class="tabs">
			<a href="#liste">Liste</a>
			<a href="#ajouter">Ajouter</a>
			<a href="#modifier"></a>
			<a href="#supprimer"></a>
		</p>
		<div id="contenu">
			<div id="liste">
				<table>
					<tr>
						<th>Numéro</th>
						<th>Quantité reçue</th>
						<th>Prix unitaire</th>
						<th>Num Produit</th>
	
					</tr>
					<?php
					foreach($resultatReception as $value)
					{
					?>
						<tr>
							<td><?php echo $value; ?></td>
							<td><?php echo $value; ?></td>
							<td><?php echo $value; ?></td>
							<td><?php echo $value; ?></td>
							<td><a href="reception.php#modifier">Modifier</a>/<a href="reception.php#supprimer?id=<?php echo $resultatReception['num_recept'] ?>" onclick="javascript:confirm()">Supprimer</a></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
			<div id="ajouter">
				<form action="reception.php" method="post">
					<h3>Ajouter une commande en réception</h3>
	
					<label for="id">Num Réception : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Quantité reçue : </label>
					<input type="text" name="quantite" id="quantite" >
					<br>
					<label for="id">Prix unitaire : </label>
					<input type="text" name="prix" id="prix" >
					<br>
					<label for="id">Num Produit : </label>
					<input type="text" name="idProduit" id="idProduit" >
					<br>
					<input type="submit" value="Ajouter" name="submit">
				</form>
				<?php
				$array = array(
					"num_recept" => @$_POST['id'],
					"qte_recue" => @$_POST['quantite'],
					"prix_unitaire" => @$_POST['prix'],
					"num_produit" => @$_POST['idProduit'],
						);
				if(isset($array['num_recept'])) {
					$reception->ajouter($array);
				}
				
				?>
			</div>
	
			<div id="modifier">
				<?php
				if(isset($$_GET['id'])) {
					$resultat = $reception->getPdo(null, strip_tags($_GET['id']));
				}
				?>
				<form action="reception.php" method="post">
					<h3>Modifier une commande en réception</h3>
	
					<label for="id">Num Réception : </label>
					<input type="text" name="id2" id="id" value="<?php $resultat['num_recept'] ?>">
					<br>
					<label for="id">Quantité reçue : </label>
					<input type="text" name="quantite2" id="quantite" value="<?php $resultat['qte_recue'] ?>">
					<br>
					<label for="id">Prix unitaire : </label>
					<input type="text" name="prix2" id="prix" value="<?php $resultat['prix_unitaire'] ?>">
					<br>
					<label for="id">Num Produit : </label>
					<input type="text" name="idProduit2" id="idProduit" value="<?php $resultat['num_produit'] ?>">
					<br>
					<input type="submit" value="Valider" name="submit">
				</form>
				<?php
				$array = array(
					"num_recept" => @$_POST['id2'],
					"qte_recue" => @$_POST['quantite2'],
					"prix_unitaire" => @$_POST['prix2'],
					"num_produit" => @$_POST['idProduit2'],
					);
				if(isset($array['num_recept'])) {
					$reception->update($array);
				}
				
				?>
			</div>
	
			<div id="supprimer">
			<?php
			//if(isset($_GET['id']) && isset($_GET())) {
			//	$reception->delete(strip_tags($_GET['id']));
			//}
			?>
			</div>
		</div>
			
			
			
	</center>


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/confirm.js"></script>
</body>
</html>
