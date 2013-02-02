<?php 
require("core.php");
?>
<!DOCTYPE HTML>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<title>TP6</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>TP6 SLAM3</h1>
	<p>bonjour</p>



	<?php
		$category = Model::load("category");
		$category->id = 2;
		$category->read();
		echo $category;
	?>
</body>
</html>