<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<title>Ajouter duck</title>
</head>
<body>
	<div>
		<img id="logo" src="canardimage.jpg" >
		<p id="where">WHERE IS DUCK ?</p>
	</div>

	<div id="bobo">

		<?php 

		try
		{

			$bdd = new PDO('mysql:host=localhost;dbname=canard;charset=utf8',
				'admin', 'azerty');
		}

		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}

		if(empty($_POST['lieu']) && empty($_POST['date'] && empty($_POST['hh'])))
		{
			echo "";
		}

		else
		{ 
			header('Location: index.php');
			$lieu = $_POST['lieu'];
			$date = $_POST['date'];
			$hh = $_POST['hh'];
			$bdd->query("INSERT INTO infocanard (lieu, date, hh)
				VALUES ('$lieu', '$date', '$hh')");
			unset($lieu);
			unset($date);
			unset($hh);
		}


		?>

		<form method="POST">
			<input type="text" name="lieu" placeholder="Lieu">
			<input type="date" name="date" placeholder="Date">
			<input type="time" name="hh" placeholder="Heure">
			<div id="but" >
				<button id="buton" class="waves-effect waves-light btn-large">Ajouter</button>
			</div>
		</form>
		<a id="back" class="waves-effect waves-light btn-large" href="index.php">Retour</a> 
	</div>
</body>
</html>