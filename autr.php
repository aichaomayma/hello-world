<?php

session_start() ;
include 'connect.php';

$email= $_POST['email'];
$password=$_POST['password'];


$_SESSION['email']=$email;
$_SESSION['password']=$password;


$sql = "SELECT * FROM formulaire WHERE email='$email' AND password='$password'" ;


$res = mysqli_query($connect,$sql) ;
if( mysqli_num_rows($res))
{

header('location:base.php') ;
}

else
{
include 'index.php';
echo "<center><font color='red'> <h1><u>verifier vos coordonnèe</u></h1> </font></centrer>";
}
 ?>