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
		
			$requeteClient = $bdd->query('SELECT * FROM client');	
		?>
		<h1>Clients</h1>

		<p id="tabs">
			<a href="controllers/ajouter.php">Ajouter</a>
			<a href="controllers/modifier.php">Modifier</a>
			<a href="controllers/supprimer.php">Supprimer</a>
		</p>
		<div id="contenu">
			<div id="liste">
				<table>
					<tr>
						<th>Numéro</th>
						<th>Nom</th>
						<th>Adresse</th>
						<th>Code postal</th>
						<th>Ville</th>
					</tr>
					<?php
						while($ligne = $requeteClient->fetch())
						{
					?>
					<tr>
						<td><?php echo $ligne['num_client']; ?></td>
						<td><?php echo $ligne['nom_client']; ?></td>
						<td><?php echo $ligne['adresse_client']; ?></td>
						<td><?php echo $ligne['code_postal']; ?></td>
						<td><?php echo $ligne['ville_client']; ?></td>
					</tr>
					<?php
						}
					?>	
				</table>
			</div>

			<div id="ajouter">
				<form action="ajouter.php?">
					<h3>Ajouter un client</h3>
	
					<label for="id">Num client : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Nom : </label>
					<input type="text" name="nom" id="nom" >
					<br>
					<label for="id">Adresse : </label>
					<input type="text" name="adresse" id="adresse" >
					<br>
					<label for="id">Code postal : </label>
					<input type="text" name="cp" id="cp" >
					<br>
					<label for="id">Ville : </label>
					<input type="text" name="ville" id="ville" >
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

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
