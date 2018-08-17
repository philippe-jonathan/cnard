<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
	<title>where is duck</title>
</head>
<body>
	<div>
		<img id="logo" src="canardimage.jpg" >
		<p id="where">WHERE IS DUCK ?</p>
	</div>
	<div id="body">

		<?php 
		try{

			$bdd = new PDO('mysql:host=localhost;dbname=canard;charset=utf8',
				'admin', 'azerty');
		}

		catch (Exception $e){

			die('Erreur : ' . $e->getMessage());
		}  
		?>
		<div class="add">
			<a href="ajoutercanard.php"><button class="waves-effect waves-light btn-large" id="bleu">Ajouter</button></a>
		</div>

		<table>
			<thead>
				<th>Lieu</th>
				<th>Précision</th>
				<th>Nombre</th>
				<th>Heure</th>
				<th>Date</th>
			</thead>
			<?php 
			$reponse = $bdd->query('SELECT * FROM infocanard');
			while($donnees=$reponse->fetch()){
				$temps = date("d-m-Y", strtotime($donnees['date']));

				echo 
					'<tr><td class="li">' . $donnees['lieu'] . '</td>' . 

					'<td>' . $donnees['adresse'] . '</td>' .

				'<td>' . $donnees['nombre'] . '</td>' .

				' <td class="hr">' . $temps . '</td>' .

				'<td class="hh">' . $donnees['hh'] . '</td></tr>' ;
			}
			?>
		</table>

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="app.js"></script>
</body>
</html>