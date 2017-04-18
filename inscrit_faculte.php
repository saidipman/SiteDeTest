<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
	</head>
<body>
<center>
<form action="partie1.php" method="post">
<table>
	<tr><td><h2>1.	RENSEIGNEMENTS PERSONNELS </h2></td></tr>
	<tr><td>Nom : </td><td><input type="text" name="nom" required="required"></td></tr>
	<tr><td>Prénom : </td><td><input type="text" name="prenom" required="required"></td></tr>
	<tr><td>CNE : </td><td><input type="text" name="cne" required="required"></td></tr>
	<tr><td>CIN : </td><td><input type="text" name="cin" required="required"></td></tr>
	<tr><td>Date de naissance : </td><td><input type="date" name="date" required="required"></td></tr>
	<tr><td>Lieu de naissance : </td><td><input type="text" name="lieuN" required="required"></td></tr>
	<tr><td>Nationalité : </td><td><input type="text" name="nationalite" required="required"></td></tr>
	<tr><td>Adresse : </td><td><input type="text" name="adresse" required="required"></td></tr>
	<tr><td>Ville : </td><td><select name="ville"><?php include("villes.php");?></select></td></tr>
	<tr><td>Pays : </td><td><select name="pays"><?php include("pays.php");?></select></td></tr>
	<tr><td>Téléphone  : </td><td><input type="text" name="tele" required="required"></td></tr>
	<tr><td>E-mail : </td><td><input type="mail" name="email" required="required"></td></tr><br>
	<tr><td colspan="2" style="text-align: right;"><input type="submit" value="Suivant" name="Suivant"></input></td></tr>
</table>
</form>
</center>
</body>
</HTML>