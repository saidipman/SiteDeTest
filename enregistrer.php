<?php
session_start();
if(isset($_POST["enregistrer"])){
$_SESSION["partie4"] = array('entreprise1' => $_POST['entreprise1'] ,'fonction1' => $_POST['fonction1'] ,
							 'periode1' => $_POST['periode1']);
}

/*
echo "<pre>";
  print_r($_SESSION["partie1"]);
  echo "</pre>";


echo "<pre>";
  print_r($_SESSION["partie2"]);
  echo "</pre>";
  

echo "<pre>";
  print_r($_SESSION["partie3"]);
  echo "</pre>";
  */
$nom = $_SESSION["partie1"]["nom"];

if(!file_exists("$nom.txt")){
	$fic = fopen("$nom.txt","a");
}
$fic = fopen("$nom.txt","r+");
//fputs("$nom.txt",$_SESSION["partie1"]);
$tab = array('partie1' => $_SESSION["partie1"],'partie2' => $_SESSION["partie2"],'partie3' => $_SESSION["partie3"],'partie4' => $_SESSION["partie4"]);
file_put_contents("$nom.txt", print_r($tab, true));
fclose($fic);

header("location:partie3.php");

?>

