<?php
if(isset($_POST['passe'])){
	if($_POST['passe']=='admin'){
		header("location:acceuil.php");
	}else
	header("location:erreur.php");
}

?>
<HTML>
<head>
	<title>TD PHP</title>
	<meta charset="utf-8">
</head>
<body>

<center>
<h1 style="color: blue;">Veuillez remplir soignesement le formulaire suivant</h1>
<h4 style="color: red;">(tous les champs sont obligatoires)</h4>
<table width="50%" style="background-color: yellow">
<form method="POST" action="">
	
	<tr>
		<td><label>Nom</label></td><td><input type="text" name="nom"></td></tr>
	
	<tr>
		<td><label>Prenom</label></td><td><input type="text" name="prenom"></td></tr>
	
	<tr>
		<td><label>Date de naissance</label></td>
							<td><select nom="jour">
							<?php
								
								for ($i=1; $i <= 31; $i++) { 
									echo "<option value='$i'>$i</option>";
								}
							?>
							</select>
							<select nom="annee">
								<option value='Janvier'>Janvier</option>
								<option value='Fevrier'>Fevrier</option>
								<option value='Mars'>Mars</option>
								<option value='Avril'>Avril</option>
								<option value='Mai'>Mai</option>
								<option value='Juin'>Juin</option>
								<option value='Juillet'>Juillet</option>
								<option value='aout'>aout</option>
								<option value='Septembre'>Septembre</option>
								<option value='October'>October</option>
								<option value='November'>November</option>
								<option value='Decembre'>Decembre</option>
							</select>
							<select nom="annee">
							<?php
								for ($j=2000; $j <= 2017; $j++) { 
									echo "<option value='$j'>$j</option>";
								}
							?>
							</select></td></tr>
	
	<tr>
		<td><label>Sexe</label></td>
					<td>Masculin<input type="radio" name="sexe" value="m">
					Feminin<input type="radio" name="sexe" value="f"></td></tr>

	
	<tr>
		<td><label>Langues</label></td>
					<td>Arabe<input type="checkbox" name="arabe">
					Francais<input type="checkbox" name="francais">
					Anglais<input type="checkbox" name="anglais">
					Autres<input type="checkbox" name="autres"></td></tr>
	
	<tr>
		<td><label>Filiere choisie</label></td><td>
					<select nom="filiere">
								<option value='SIGL'>SIGL</option>
								<option value='RT'>RT</option>
								<option value='I'>I</option>
					</select></td></tr>
	
	<tr>
		<td><label>Tele</label></td><td><input type="text" name="tele"></td></tr>
	
	<tr>
		<td><label>Adresse</label></td><td><input type="text" name="adresse"></td></tr>
	
	<tr>
		<td><label>Email</label></td><td><input type="text" name="email"></td></tr>
	
	<tr>
		<td><label>Motivations</label></td><td><textarea nom="motivations" cols="20" rows="4"></textarea></td>	</tr>
						
						<tr>
					<td>		<td><input type="submit" name="enregister" value="Enregistrer">
						<input type="reset" name="retablir" value="Rétablir"></td></tr>
</form>
</table>
</center>
</body>
</HTML>