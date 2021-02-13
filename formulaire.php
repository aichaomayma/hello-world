
<!DOCTYPE html>
<html lang="fr">
<head>
	<title> formulaire </title>
	<meta charset="utf8mbr4_general">
</head>
<body background="image/imag6.jpg">
	<br>
	<br>
	<br>
	<legend align="center">
		<font color="red" size="800"><h5><u>inscription</u></h5></font></legend>
		<form action="formulaire2.php" method="post">
		      <br>
		      <br>
		      <br>
			<table align="center" size="800" width="400" border="10">
				<tr align="center" bgcolor="white">
					<td>matricule:</td>
					<td><input  type="id" name="id" placeholder="tapez votre id"></td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<td>nom:</td>
					<td><input type="text" name="nom" placeholder="tapez votre nom"></td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<td>prenom:</td>
					<td><input type="text" name="prenom" placeholder="tapez votre prenom"></td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<td>adresse: </td>
					<td><input type="text" name="adresse" placeholder="tapez votre adresse"> </td>			
				</tr>
				<tr align="center" bgcolor="white">
					<td>date_de_naissance :</td>
					<td><input type="date" name="date_de_naissance"> </td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<td>num_telephone :</td>
					<td><input type="numbre" name="num_telephone" placeholder="tapez votre numero du téléphone "> </td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<td> email:</td>
					<td><input type="text" name="email" placeholder="tapez votre email"></td>
				</tr>
				<tr align="center" bgcolor="white">
					<td>password:</td>
					<td><input type="password" name="password" placeholder="tapez votre mot de passe"> </td>
					
				</tr>
				<tr align="center" bgcolor="white">
					<br><td><input type="reset" value="annuler" > </td>
					<br><td><input type="submit" value="valider"> </td>
					<td><input type="button" class="bouton" value="login" onclick="document.location.href='index.php';"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>