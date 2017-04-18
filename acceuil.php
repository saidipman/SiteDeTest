<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
</head>
<body>
<marquee font-color="#F00"><h1>Bienvenue</h1></marquee><hr>
<?php
if(!file_exists("compteur.txt")){
	$fic = fopen("compteur.txt","a");
	fputs($fic,"0");
	fclose($fic);
}
$fic = fopen("compteur.txt","r+");

$nb = fgets($fic);
$nb++;
echo "<h1>vous etes le visiteur : ".$nb."</h1>";
fseek($fic, 0);
fputs($fic,"$nb");

fclose($fic);
?>
<a href="inscription.php">Page d'inscription</a><br>
<a href="dejainscrit.php">Page deja inscrit</a><br>
</body>
</HTML>