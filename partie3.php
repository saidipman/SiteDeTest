<?php
session_start();
if(isset($_POST["Suivant"])){
$_SESSION["partie3"] = array('note1annee' => $_POST['note1annee'] ,'note2annee' => $_POST['note2annee'] ,
							 'moyenneGD' => $_POST['moyenneGD'] ,'classement' => $_POST['classement'] );
}


echo "<pre>";
  print_r($_SESSION["partie1"]);
  echo "</pre>";


echo "<pre>";
  print_r($_SESSION["partie2"]);
  echo "</pre>";
  

echo "<pre>";
  print_r($_SESSION["partie3"]);
  echo "</pre>";
  
?>


<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
	</head>
<body>
<a href="afficher.php">Afficher</a>
<center>
<form action="enregistrer.php" method="post">
<table >
	<tr><td><h2>4.	EXPERIENCE PROFESSIONNELLE (STAGES, … ;)</h2></td></tr>
	<tr><td colspan="2">
	<table width="800px" border="1" style="text-align: center">
		<tr><td>Entreprise(s)</td><td>Fonction ou intitulé du stage</td><td>Période</td></tr>
		<tr><td><input type="text" name="entreprise1" style="width: 100%" /></td><td><input type="text" name="fonction1" style="width: 100%"/></td><td><input type="text" name="periode1" style="width: 100%"/></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	</table></td></tr>
	<tr><td><p>A la fin du formulaire, on doit rajouter :<br>
	•	Une case à cocher (Les données sont vérifiées avant d’être validées). Ainsi le <br>demandeur doit vérifier et valider ces informations en cliquant cette case.<br>
	•	Un lien (ou un bouton) pour afficher ces informations dans une nouvelle page HTML.<br>Un
	numéro d’inscription sera affecté à chaque demande et cette page sera imprimée et <br>joignez au dossier de candidature envoyé par le demandeur à l’adresse postale de <br>l’établissement. 
	N.B : le numéro doit être indiqué sur l’enveloppe contenant le dossier de candidature
	</p></td></tr>
	<tr><td> <input type="reset" name="retablir" value="Rétablir"></td><td><input type="submit" value="Enregistrer" required="required" name="enregistrer"></td></tr>	
</table></form>
</center>
</body>
</HTML>