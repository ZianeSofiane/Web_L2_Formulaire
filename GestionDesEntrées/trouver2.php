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
<tr>
				<td> 
				<?php				
				$name=$_POST['name'];						
				echo $name . '<br/><br/>';				
				try
						{
							$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
						}
						catch(Exception $e)
						{
								die('Erreur : '.$e->getMessage());
						}
						$reponse = $bdd->query("SELECT Nom, Prenom, NB FROM client WHERE Nom='$name'");
						
						if($donnees = $reponse->fetch()){ 						
						do{															
							echo 'Trouvé :  ' . $donnees['Nom'] . ' ' . $donnees['Prenom'] . ' ' . $donnees['NB'] . ' billets<br/>';							
						}while ($donnees = $reponse->fetch());
						}
						else echo 'Erreur : Nom inconnu. <br/><br/>';						
						$reponse->closeCursor();	
				?>

<?php        
    echo $menu;
?>

	</body>
</html>