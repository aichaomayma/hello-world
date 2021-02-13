<?php 
include("connect.php");
$id=$_POST['id'];
echo $id;

$nom=$_POST['nom'];
echo $nom;

$prenom=$_POST['prenom'];
echo $prenom;

$adresse=$_POST['adresse'];
echo $adresse;

$date_de_naissance=$_POST['date_de_naissance'];
echo $date_de_naissance;

$num_telephone=$_POST['num_telephone'];
echo $num_telephone;

$email=$_POST['email'];
echo $email;

$password=$_POST['password'];
echo $password;

$SQL="insert into formulaire (id,nom,prenom,adresse,date_de_naissance,num_telephone,email,password) values ( '$id','$nom', '$prenom', '$adresse','$date_de_naissance', '$num_telephone','$email','$password') ";

if (MySQLi_Query($connect,$SQL))
echo "formulaire termine avec succes";
else
echo "erreur";

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <table>
 	<tr>
 		<td align="center" width="300" ><a  href="index.php"><font color="yellow" size="5"><b>connecter</b></font> </a></td>
 	</tr>
 </table>
 </body>
 </html>