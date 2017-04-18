
<?php
$temps = 365*24*3600;
$name ="";

?>
<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
</head>
<body>
<marquee font-color="#F00"><h1>Bienvenue</h1></marquee><hr>
<form action="page.php" method="post">
<p><?php echo "Bonjour ".$_COOKIE["pseudo"]; ?></p>
Votre Nom : <input type="text" name="name">
<br/><input type="submit" value="Envoyez">
</form>
<div>
<h2>Aimez vous mon site ?</h2>
<form action="sondage.php" method="post">
<input type="radio" name="sondage" value="Oui" >Oui
<input type="radio" name="sondage" value="Non">Non
<br/><input type="submit" value="Envoyez">
</form>
</div>
</body>
</HTML>