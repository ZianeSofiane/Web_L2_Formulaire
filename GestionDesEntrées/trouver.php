<!DOCTYPE HTML>

<?php
    require_once("./menu.php");
        
    $menu = affiche_menu();
?>

<html>
	<head>
		<meta charset= "utf-8"/>
		<link rel="stylesheet" href="Gestion.css"/>
		<TITLE> Salon de la decoration </TITLE>
	</head>
	<body>
		<div class="Tête">
			<h1>Salon de la décoration</h1>
			<h2>Front-Office</br>Gestion des entrées</h2>
		</div>
		
		
<div id="menu">

    <ul id="onglets">

        <li class="gestion"><a href="gestion.php">Gestion des billets</a></li>

        <li><a href="trouver.php">Trouver un client</a></li>

        <li><a href="gestion1.html">Deconnexion</a></li>

    </ul>

</div>
<div class="Tab">
	<p>Nom de la personne apparaissant sur la facture </p>
	<input type="text" name="name" class="barre" name="barre">
	<input type="button" class="button2" value="Valider" href="trouver2.php" style="font-weight:bold"/>
</div>	

<?php        
    echo $menu;
?>

	</body>
</html>