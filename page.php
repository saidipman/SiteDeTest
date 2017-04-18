<?php
$name ="";
	if(isset($_POST['name']))
		$name = $_POST['name'];
setcookie("pseudo","$name",time()+3600);
if($name == "said")
echo "<div style='background-color:red'>Votre Nom est ".$name."</div>";
else
	echo "<div style='background-color:blue'>Votre Nom est ".$name."</div>";
echo "<br/><a href='interactive.php'>
<button>retoure</button>
</a>";
?>