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
		
			$requeteProduit = $bdd->query("SELECT * FROM produit");
		?>
		<h1>Produit</h1>

		<p>
			<a href="controllers/ajouter.php">Ajouter</a>
			<a href="controllers/modifier.php">Modifier</a>
			<a href="controllers/supprimer.php">Supprimer</a>
		</p>
		
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
			while($ligne = $requeteProduit->fetch())
			{
		?>
			<tr>
				<td><?php echo $ligne['num_produit']; ?></td>
				<td><?php echo $ligne['designation']; ?></td>
				<td><?php echo $ligne['prix_unitaire']; ?></td>
				<td><?php echo $ligne['qte_stock']; ?></td>
				<td><?php echo $ligne['qte_reservee']; ?></td>
				<td><?php echo $ligne['qte_commandee']; ?></td>
				<td><?php echo $ligne['alerte_stock']; ?></td>
			</tr>
		<?php
			}
		?>
		</table>
		
	</center>

</body>
</html>
