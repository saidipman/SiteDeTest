<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
</head>
<body>
<marquee font-color="#F00"><h1>Bienvenue</h1></marquee><hr>
<?php




if(!file_exists("sondage.txt")){
	$fic = fopen("sondage.txt","a");
	fputs($fic,"0,0");
	fclose($fic);
}
$fic = fopen("sondage.txt","r+");

$sh = fgets($fic);
//$tab=$arrayName = array('' => , );
//list($oui,$non)=split("[/,-]", $sh);
$tab=explode(",", $sh);



if(isset($_POST['sondage'])){	
	if($_POST['sondage']=='Oui')
		$tab[0]++;
	else
		$tab[1]++;

}
$nb=$tab[0]+$tab[1];
echo"<h1>Oui : $tab[0] => ".round(($tab[0]/$nb)*100,2)."%<br>Non : $tab[1] => ".round((($tab[1]/$nb)*100),2)."%</h1>";
$sh = "$tab[0],$tab[1]";
//$nb++;

fseek($fic, 0);
fputs($fic,"$sh");

fclose($fic);

?>
</body>
</HTML>