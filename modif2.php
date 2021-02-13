<?php
include("connect.php");
$id= $_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];
$date_de_naissance=$_POST['date_de_naissance'];
$adresse=$_POST['adresse'];
$num_telephone=$_POST['num_telephone'];

echo $id ;
echo $nom;
echo $prenom;
echo $email;
echo $password;
echo $date_de_naissance;
echo $adresse;
echo $num_telephone;

$sql="update formulaire set nom='$nom', prenom='$prenom',email='$email',password='$password',date_de_naissance='$date_de_naissance',adresse='$adresse',num_telephone='$num_telephone'where id='$id'"; 

mysqli_query($connect,$sql);
header('location:accueil.php');
?>