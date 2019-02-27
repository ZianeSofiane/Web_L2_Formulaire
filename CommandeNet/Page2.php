<!DOCTYPE HTML>

<html>
	<head>
		<meta charset= "utf-8"/>
		<link rel="stylesheet" href="TpWeb.css" />
		<script type="text/javascript" src="Validation.js"></script>
		<TITLE> Salon de la decoration </TITLE>
	</head>
	<body>
		<div class="Tête">
			<h1>Salon de la décoration</h1>
			<h2>Récapitulatif des informations saisies</h2>
		</div>
		<table>
			<tr>
				<th class="T"> Votre réservation </th>
				<th class="T"> Nombre de billets </th>
				<th class="T"> Offre Web </th>
				<th class="T"> Total TTC </th>
			</tr>
			<tr>
				<td class="T"> Salon de la décoration Lille Grand Palais </br> 6,7,8 Mars 2009 </td>
				<td class="T"> <?php echo $_POST['nbbillets']; ?></td>
				<td class="T"> 
					<?php 
						if($_POST['nbbillets']==1){ 
							echo 'Achat d une place';
						} 
						else{ 
							echo 'La 2ème place à moitié prix </br> pour une entrée achetée';
						}
					?>
				</td>
				<td class="T">
					<?php
						$prix = 8*$_POST['nbbillets'];
						$prixReduit = 8*$_POST['nbbillets'] - (4*(floor($_POST['nbbillets']/2))) ;
						if($prix==8){
							echo '8€ TTC';
						}
						else{
							echo '<p class="T3">',$prix,'€ TTC</br></p>';
							echo '<p class="T2"style="font-weight:bold">',$prixReduit,'€ TTC </p>';
						}
					?>
			</tr>
		</table>
		
		<div class="Recap">
		<div class="Info">
			<p></br></br> Bonjour </p> 
			<?php 
				if(!(isset($_POST['civilité']))){
					echo '<strong>Veuillez indiquer votre civilité </strong></br></br>'; 
				}
				else{
					echo $_POST['civilité'] ;
					echo ' ';
				}
				
				if($_POST['Nom']==null){
					echo '</br> <strong>Veuillez indiquer votre nom </strong></br></br>'; 
				}
				else{
					echo $_POST['Nom'] ;
					echo ' ';
				}
				
				if($_POST['Prénom']==null){
					echo '<strong>Veuillez indiquer votre prénom </strong></br></br>'; 
				}
				else{
					echo $_POST['Prénom'] ;
					echo '</br></br>';
				}
				
				if(!(isset($_POST['Choix1']))){
					echo '<strong>Information manquante: Particulier ou Professionnel?</strong>';
					echo '</br></br>';
				}
				else {
					echo 'Vous êtes un ';
					echo $_POST['Choix1'];
					echo '</br></br>';
				}
				
				if($_POST['Adresse']==null){
					echo '<strong>Veuillez indiquer votre adresse</strong>';
					echo '</br></br>';
				}
				else {
					echo $_POST['Adresse'];
					echo ' ';
				}
				
				if ($_POST['Adresse2']!=null) {
					echo '/ ' ;
					echo $_POST['Adresse2'] ; 
					echo '</br></br>';
				}
				
				if($_POST['CodePostal']==null){
					echo '</br></br><strong>Veuillez indiquer votre code postal </strong></br></br>'; 
				}
				else{
					echo $_POST['CodePostal'] ;
					echo ' ';
				}
				
				if($_POST['Ville']==null){
					echo '<strong>Veuillez indiquer votre ville </strong></br></br>'; 
				}
				else{
					echo $_POST['Ville'] ;
					echo '</br></br></br>';
				}
				
				if($_POST['Email']==null){
					echo '<strong>Veuillez indiquer votre email </strong></br>'; 
				}
				elseif ($_POST['Email']!=null && $_POST['ConfirmationMail']==null){
					echo '<strong>Veuillez confirmer votre adresse mail </strong></br>';
				}
				else{
					echo $_POST['Email'] ;
					echo '</br>';
				}
			?>
			
			</br>
			<input type="button" value="Modifier" class="button" onclick="history.go(-1)" style="font-weight:bold">
			
			<?php
				
				$civilite = $_POST['civilité'];
				$prenom = $_POST['Prénom'];
				$nom = $_POST['Nom'];
				$A1 = $_POST['Adresse'];
				$A2 = $_POST['Adresse2'];
				$CP = $_POST['CodePostal'];
				$Ville = $_POST['Ville'];
				$Email = $_POST['Email'];
				$Num = 1;
				$date=date('2008-10-07');
				$commande='0809520320';
				$nb = $_POST['nbbillets'];
				
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=salon;charset=utf8', 'root', '');
				}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
$req = $bdd->prepare('INSERT INTO client(Civilite,NumClient,Prenom,Nom,A1,A2,CP,Ville,Email,commande,date,prix,NB) VALUES(:Civilite, :NumClient, :Prenom, :Nom, :A1, :A2, :CP, :Ville, :Email, :commande, :date, :prix, :NB)');
$req->execute(array(
	'Civilite' => $civilite,
	'NumClient' => $Num,
	'Prenom' => $prenom,
    'Nom' => $nom,
    'A1' => $A1,
    'A2' => $A2,
    'CP' => $CP,
    'Ville' => $Ville,
    'Email' => $Email,
	'commande' => $commande,
	'date' => $date,
	'prix' => $prix,
	'NB' => $nb,
    ));	
				if( (isset($_POST['civilité'])) 
					&& $_POST['Nom']!=null 
					&& $_POST['Prénom']!=null 
					&& (isset($_POST['Choix1'])) 
					&& $_POST['Adresse']!=null
					&& $_POST['CodePostal']!=null
					&& $_POST['Ville']!=null
					&& $_POST['Email']!=null ) {
						
					echo '<a href="Page3.php"><input type="button" value="Valider" class="button" onclick="validation()" style="font-weight:bold"></a>';
				}
			?>
		</div>
		</div>
		</br><input type="Checkbox" onclick="accepte()" name="Lu" id="Lu"> J'ai lu et j'accepte les <a href="Conditions.html">conditions d'utilisations</a></td>
		
	</body>
</html>