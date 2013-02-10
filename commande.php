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
		
		$commande = new Commande();
		$resultatCommande = $commande->getPdo();

		?>
		<h1>Commande</h1>

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
						<th>Date</th>
						<th>Client</th>
						
					</tr>
					<?php
					foreach($resultatCommande as $value)
					{
					?>
					<tr>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><a href="commande.php#modifier">Modifier</a>/<a href="commande.php#supprimer?id=<?php echo $resultatCommande['num_com'] ?>" onclick="javascript:confirm()">Supprimer</a></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>

			<div id="ajouter">
				<form action="commande.php">
					<h3>Ajouter une commande</h3>
	
					<label for="id">Num commande : </label>
					<input type="text" name="id" id="id" >
					<br>
					<label for="id">Date commande : </label>
					<input type="text" name="date" id="date" >
					<br>
					<label for="id">Num client : </label>
					<input type="text" name="idClient" id="idClient" >
					<br>
					<input type="submit" value="Ajouter" name="submit">
				</form>
				<?php
				$array = array(
					"num_commande" => @$_POST['id'],
					"date_commande" => @$_POST['date'],
					"num_client" => @$_POST['idClient'],
					);
				if(isset($array['num_commande'])) {
					$commande->ajouter($array);
				}
				?>
			</div>

			<div id="modifier">
				<?php
				if(isset($$_GET['id'])) {
					$resultat = $commande->getPdo(null, strip_tags($_GET['id']));
				}
				?>
				<form action="commande.php">
					<h3>Modifier une commande</h3>
	
					<label for="id">Num commande : </label>
					<input type="text" name="id2" id="id" >
					<br>
					<label for="id">Date commande : </label>
					<input type="text" name="date2" id="date" >
					<br>
					<label for="id">Num client : </label>
					<input type="text" name="idClient2" id="idClient" >
					<br>
					<input type="submit" value="Valider" name="submit">
				</form>
				<?php
				$array = array(
					"num_commande" => @$_POST['id2'],
					"date_commande" => @$_POST['date2'],
					"num_client" => @$_POST['idClient2'],
					);
				if(isset($array['num_commande'])) {
					$commande->update($array);
				}
				?>
			</div>

			<div id="supprimer">
				<?php
				//if(isset($_GET['id']) && isset($_GET())) {
				//	$commande->delete(strip_tags($_GET['id']));
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
