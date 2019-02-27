<!DOCTYPE HTML>

<html>
	<head>
		<meta charset= "utf-8"/>
		<link rel="stylesheet" href="TpWeb.css" />
		<TITLE> Salon de la decoration </TITLE>
	</head>
	<body>
		<div class="Tête">
			<h1>Salon de la décoration</h1>
			<h2>Réception d'email</h2>
		</div>
		<div class="De"><strong> De : </strong></div></br> contact@salondeladecoration.fr
		<div class="A"><strong> A : </strong></div></br>
		<p> <?php
						try
						{
						$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
						}
						catch (Exception $e)
						{
						die('Erreur : ' . $e->getMessage());
						}
						$reponse=$bdd->query('SELECT Email FROM client');
				
						while ($donnees = $reponse->fetch())
							{
								echo $donnees['Email'] . '<br />';
							
							}
						$reponse->closeCursor();
						?></p>
		<div class="Contenu"><strong> Contenu de l'email : </strong></div>
		<p></br>
		Bonjour,
Vous venez de réserver vos billets pour le salon de la décoration qui se déroule les 6, 7, 8 Mars 2009 à Lille Grand Palais.
Vous trouverez en pièces jointes de cet email votre facture et vos billets au format PDF.
<strong>Merci d'imprimer vos billets afin de les présenter à l'entrée du salon.</strong>
Chaque billet donne droit à une seule entrée, pour plus d'informations veuillez consulter les conditions générales de vente.
Cordialement,
L'équipe du Salon de la décoration. 
		</p>
		<div class="Piece"><strong> Pièces jointes de l'email : </strong></div>
		<table class="T"><tr><td><a href="Page5.php"><img src="pdf.png" width="80px"></br>Facture</a></td><td><a href="Page5.php"><img src="pdf.png" width="80px"></br>Billet</a></td></tr></p>
		<input type="button" class="button3" value="Suivant" onclick="document.location.href='Page4.php'" class="button" style="font-weight:bold">
	</body>
</html>