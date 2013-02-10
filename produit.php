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
	
		$produit = new Produit();
		$resultatProduit = $produit->getPdo();
		?>
		<h1>Produit</h1>

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
						<th>Désignation</th>
						<th>Prix Unitaire</th>
						<th>Quantité en Stock</th>
						<th>Quantité réservée</th>
						<th>Quantité commandée</th>
						<th>Alerte stock</th>
						
					</tr>
				<?php
				foreach($resultatProduit as $value)
				{
				?>
					<tr>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><a href="produit.php#modifier?id=<?php echo $resultatProduit['num_produit'] ?>">Modifier</a>/<a href="produit.php#supprimer?id=<?php echo $resultatProduit['num_produit'] ?>" onclick="javascript:confirm()">Supprimer</a></td>
					</tr>
				<?php
				}
				?>
				</table>
			</div>

			<div id="ajouter">
				<form action="produit.php" method="post">
					<h3>Ajouter une commande en réception</h3>
	
					<label for="id">Num produit : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Désignation : </label>
					<input type="text" name="designation" id="designation" >
					<br>
					<label for="id">Prix unitaire : </label>
					<input type="text" name="prix" id="prix" >
					<br>
					<label for="id">Quantité en stock : </label>
					<input type="text" name="quantiteS" id="quantiteS" >
					<br>
					<label for="id">Quantité reservée : </label>
					<input type="text" name="quantiteR" id="quantiteR" >
					<br>
					<label for="id">Quantité commandée : </label>
					<input type="text" name="quantiteC" id="quantiteC" >
					<br>
					<label for="id">Alerte stock : </label>
					<input type="text" name="alerte" id="alerte" >
					<br>
					<input type="submit" value="Ajouter" name="submit">
				</form>

				<?php
				$array = array(
					"num_produit" => @$_POST['id'],
					"designation" => @$_POST['designation'],
					"prix_unitaire" => @$_POST['prix'],
					"qte_stock" => @$_POST['quantiteS'],
					"qte_reservee" => @$_POST['quantiteR'],
					"qte_commandee" => @$_POST['quantiteC'],
					"alerte_stock" => @$_POST['alerte'],
						);

				if(isset($array['num_produit'])) {
					$produit->ajouter($array);
				}
				?>
			</div>

			<div id="modifier">
				<?php
				if(isset($$_GET['id'])) {
					$resultat = $produit->getPdo(null, strip_tags($_GET['id']));
				}
				?>
				<form action="produit.php" method="post">
					<h3>Ajouter une commande en réception</h3>
	
					<label for="id">Num produit : </label>
					<input type="text" name="id2" id="id" >
					<br>
					<label for="id">Désignation : </label>
					<input type="text" name="designation2" id="designation" >
					<br>
					<label for="id">Prix unitaire : </label>
					<input type="text" name="prix22" id="prix" >
					<br>
					<label for="id">Quantité en stock : </label>
					<input type="text" name="quantiteS2" id="quantiteS" >
					<br>
					<label for="id">Quantité reservée : </label>
					<input type="text" name="quantiteR2" id="quantiteR" >
					<br>
					<label for="id">Quantité commandée : </label>
					<input type="text" name="quantiteC2" id="quantiteC" >
					<br>
					<label for="id">Alerte stock : </label>
					<input type="text" name="alerte2" id="alerte" >
					<br>
					<input type="submit" value="Ajouter" name="submit">
				</form>
				<?php
				$array = array(
					"num_produit" => @$_POST['id2'],
					"designation" => @$_POST['designation2'],
					"prix_unitaire" => @$_POST['prix2'],
					"qte_stock" => @$_POST['quantiteS2'],
					"qte_reservee" => @$_POST['quantiteR2'],
					"qte_commandee" => @$_POST['quantiteC2'],
					"alerte_stock" => @$_POST['alerte2'],
						);

				if(isset($array['num_produit'])) {
					$produit->update($array);
				}
				?>
			</div>

			<div id="supprimer">
				<?php
				//if(isset($_GET['id']) && isset($_GET())) {
				//	$produit->delete(strip_tags($_GET['id']));
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
