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
			
			$requeteCommande = $bdd->query("SELECT * FROM commande");

		?>
		<h1>Commande</h1>

		<p class="tabs">
			<a href="#liste">Liste</a>
			<a href="controllers/ajouter.php">Ajouter</a>
			<a href="controllers/modifier.php">Modifier</a>
			<a href="controllers/supprimer.php">Supprimer</a>
		</p>

		<div id="contenu">
			<div id="liste">
				<table>
					<tr>
						<th>Numéro</th>
						<th>Date</th>
						<th>Client</th>
						
					</tr>
					<?php
					while($ligne = $requeteCommande->fetch())
					{
					?>
					<tr>
						<td><?php echo $ligne['num_com']; ?></td>
						<td><?php echo $ligne['date_com']; ?></td>
						<td><?php echo $ligne['num_client']; ?></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>

			<div id="ajouter">
				<form action="ajouter.php?">
					<h3>Ajouter une commande</h3>
	
					<label for="id">Num commande : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Date commande : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Num client : </label>
					<input type="text" name="id" id="id" >
					<br>
					<input type="submit" value="Ajouter" name="submit">
				</form>
			</div>

			<div id="modifier">
				
			</div>

			<div id="supprimer">
				
			</div>

		</div>

	</center>
		
</body>
</html>
