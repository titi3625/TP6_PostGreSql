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
	
		$client = new Client();
		$resultatClient = $client->getPdo();
		?>
		<h1>Clients</h1>

		<p id="tabs">
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
						<th>Nom</th>
						<th>Adresse</th>
						<th>Code postal</th>
						<th>Ville</th>
						<th>Action</th>
					</tr>
					<?php
					foreach($resultatClient as $value)
					{
					?>
					<tr>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><?php echo $value; ?></td>
						<td><a href="reception.php#modifier">Modifier</a>/<a href="reception.php#supprimer?id=<?php echo $resultatClient['num_client'] ?>" onclick="javascript:confirm()">Supprimer</a></td>
					</tr>
					<?php
					}
					?>	
				</table>
			</div>

			<div id="ajouter">
				<form action="client.php">
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

				<?php
				$array = array(
					"num_client" => @$_POST['id'],
					"nom_client" => @$_POST['nom'],
					"adresse_client" => @$_POST['adresse'],
					"code_postal" => @$_POST['cp'],
					"ville_client" => @$_POST['ville'],
						);
				if(isset($array['num_client'])) {
					$client->ajouter($array);
				}
				
				?>
			</div>

			<div id="modifier">
				<?php
				if(isset($$_GET['id'])) {
					$resultat = $client->getPdo(null, strip_tags($_GET['id']));
				}
				?>
				<form action="client.php" method="post">
					<h3>Modifier une fiche client</h3>
	
					<label for="id">Num client : </label>
					<input type="text" name="id2" id="id" value="<?php $resultat['num_client'] ?>">
					<br>
					<label for="id">Nom : </label>
					<input type="text" name="nom2" id="nom" value="<?php $resultat['nom_client'] ?>">
					<br>
					<label for="id">Adresse : </label>
					<input type="text" name="adresse2" id="adresse" value="<?php $resultat['adresse_client'] ?>">
					<br>
					<label for="id">Code postal : </label>
					<input type="text" name="cp2" id="cp" value="<?php $resultat['ville_client'] ?>">
					<br>
					<label for="id">Ville : </label>
					<input type="text" name="ville2" id="ville" >
					<br>
					<input type="submit" value="Valider" name="submit">
				</form>
				<?php
				$array = array(
					"num_client" => @$_POST['id2'],
					"nom_client" => @$_POST['nom2'],
					"adresse_client" => @$_POST['adresse2'],
					"code_postal" => @$_POST['cp2'],
					"ville_client" => @$_POST['ville2'],
					);
				
				if(isset($array['num_client'])) {
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
