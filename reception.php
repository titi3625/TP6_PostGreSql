<!DOCTYPE HTML>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title>TP6 postgres pdo</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
		<?php
			include_once('core.php');

			$reception = new Reception();
			$resultatReception = $reception->getPdo();			
		?>
	<center>
		<h1>Réception</h1>

		<p class="tabs">
			<a href="#liste">Liste</a>
			<a href="#ajouter">Ajouter</a>
			<a href="#modifier">Modifier</a>
			<a href="#supprimer">Supprimer</a>
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
						</tr>
					<?php
					}
					?>
				</table>
			</div>

			<div id="ajouter">
				<form action="" method="post">
					<h3>Ajouter une commande en réception</h3>
	
					<label for="id">Num Réception : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Quantité reçue : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Prix unitaire : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Num Produit : </label>
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


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
