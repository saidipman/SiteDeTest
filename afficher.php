<?php

session_start();
/*
$nom = $_SESSION["partie1"]["nom"];
if(!file_exists("$nom.txt")){
	$fic = fopen("$nom.txt","a");
}
$fic = fopen("$nom.txt","r+");*/
$tab = file("Hamza.txt");
foreach($tab as $value){
print("<br>".$value);
}

?>