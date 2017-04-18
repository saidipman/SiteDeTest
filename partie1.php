<?php
session_start();
if(isset($_POST["Suivant"])){
$_SESSION["partie1"] = array('nom' => $_POST['nom'] ,'prenom' => $_POST['prenom'] ,'cne' => $_POST['cne'] ,
							'cin' => $_POST['cin'] ,'date' => $_POST['date'] ,'lieuN' => $_POST['lieuN'] ,
							'nationalite' => $_POST['nationalite'] ,'adresse' => $_POST['adresse'] ,
							'ville' => $_POST['ville'] ,'pays' => $_POST['pays'] ,'tele' => $_POST['tele'] ,
							'email' => $_POST['email'] );
}

?>

<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
	</head>
<body>
<center>
<form action="partie2.php" method="post">
<table >
	<tr><td><h2>2.	FORMATIONS ANTERIEURS</h2></td></tr>
	<tr><td>Série du baccalauréat  : </td><td><input type="text" name="serieB" required="required"></td></tr>
	<tr><td>Dernier diplôme obtenu :  : </td><td><input type="text" name="dernierDO" required="required"></td></tr>
	<tr><td>Etablissement  : </td><td><input type="text" name="etablissement" required="required"></td></tr>
	<tr><td>Autres diplômes   : </td><td><input type="text" name="autreDip" required="required"></td></tr>
<tr><td colspan="2" style="text-align: right;"><input type="submit" value="Suivant" name="Suivant"/> </td></tr>
</table>
</form>
</center>
</body>
</HTML>