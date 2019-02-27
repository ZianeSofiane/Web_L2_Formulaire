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
			<h2>Back-Office Client</br>Gestion des commandes</h2>
		</div>
		</br></br>
		<p> Commande : <?php
						try
						{
						$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
						}
						catch (Exception $e)
						{
						die('Erreur : ' . $e->getMessage());
						}
						$reponse=$bdd->query('SELECT commande FROM client');
				
						while ($donnees = $reponse->fetch())
							{
								echo $donnees['commande'] . '<br />';
							
							}
						$reponse->closeCursor();
						?> </p>
						
	    <table border="1" cellspacing="0">
			<tr class="a1">
				<th>Client facturé</th>
				<th>Référneces</th>
			</tr>
			<tr>
				<td> 
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT Civilite, Nom, Prenom FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['Civilite'].' '.$donnees['Prenom'].' '.$donnees['Nom'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
				<td> N'Commande :
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT commande FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['commande'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT A1 FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['A1'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
				<td> Date de facture: 
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT date FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['date'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
			</tr>
			<tr>
				<td>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT CP, Ville FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['CP'] . ' ' . $donnees['Ville'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
				<td> N'Client : 
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT NumClient FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['NumClient'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
			</tr>
		</table>
		<p></p>
		
		<table border="1" cellspacing="0">
			<tr class="a1">
				<th>Désignation</th>
				<th>Quantité</th>
				<th>Prix unitaire</th>
				<th>Remise</th>
				<th>Montant TTC</th>
			</tr>
			<tr>
				<td> Entrée plein tarif </td>
				<td> <p><?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT NB FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['NB'];
							
						}
				$reponse->closeCursor();
				?></p> </td>
				<td> 8.00 euros </td>
				<td>   </td>
				<td> 8.00 euros </td>
			</tr>
			<tr>
				<td> Entrée tarif réduit </td>
				<td>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT NumClient FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['NumClient']-1;
							
						}
				$reponse->closeCursor();
				?>
				</td>
				<td> 8.00 euros </td>
				<td> -50% </td>
				<td> 4 euros </td>
			</tr>
		</table>
		<p></p>
		
		<table border="1" cellspacing="0">
			<tr class="a1">
				<th>Total HT</th>
				<th>Total TVA 5.5%</th>
				<th>Total TTC</th>
			</tr>
			<tr>
				<td>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT prix FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['prix']-($donnees['prix']*0.055);
							
						}
				$reponse->closeCursor();
				?>
			    </td>
				<td>
				<?php
					try
					{
					$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
					}
					catch (Exception $e)
					{
					die('Erreur : ' . $e->getMessage());
					}
					$reponse=$bdd->query('SELECT prix FROM client');
				
					while ($donnees = $reponse->fetch())
						{
							echo $donnees['prix']*0.055;
							
						}
					$reponse->closeCursor();
				?>
				</td>
				<td> 
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
				die('Erreur : ' . $e->getMessage());
				}
				$reponse=$bdd->query('SELECT prix FROM client');
				
				while ($donnees = $reponse->fetch())
						{
							echo $donnees['prix'];
							
						}
				$reponse->closeCursor();
				?>
				</td>
			</tr>
		</table></br></br></br></br>
		<input type="button" value="Retour" class="button" onclick="history.go(-1)" style="font-weight:bold">
	</body>
</html>