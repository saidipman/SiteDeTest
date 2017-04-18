<?php
session_start();
if(isset($_POST["Suivant"])){
$_SESSION["partie2"] = array('serieB' => $_POST['serieB'] ,'dernierDO' => $_POST['dernierDO'] ,
							 'etablissement' => $_POST['etablissement'] ,'autreDip' => $_POST['autreDip'] );
}

?>

<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
	</head>
<body>
<center>
<form action="partie3.php" method="post">
<table >

	<tr><td><h2>3.	NOTES ET CLASSEMENT </h2></td></tr>
	<tr><td><p>(DEUG ou DEUP : SMI ou MIP,  DUT informatique, BTS informatique,  DTS <br>développement informatique (ISTA) ou DTS systèmes d’informations (ISTA) et classes <br>préparatoires aux grandes écoles).</p><br></td></tr>
	<tr><td>•	Note Première année  : </td><td><input type="text" name="note1annee" required="required"></td></tr> 
	<tr><td>•	Note Deuxième année : </td><td><input type="text" name="note2annee" required="required"></td></tr>
	<tr><td>•	Moyenne Générale du diplôme :  </td><td><input type="text" name="moyenneGD" required="required"></td></tr>
	<tr><td>•	Classement :</td><td><input type="text" name="classement" required="required"></td></tr>
<tr><td colspan="2" style="text-align: right;"><input type="submit" value="Suivant" name="Suivant"/>  </td></tr>
</table>
</form>
</center>
</body>
</HTML>