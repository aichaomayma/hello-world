<?php 
include("connect.php");
$id=$_GET['id'];
echo $id;
$SQL="delete from formulaire where id='$id'";
mysqli_query($connect, $SQL);
header('location: accueil.php');
 ?>