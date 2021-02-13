<?php
$servername="localhost";
$username="root";
$password="";
$dbname="atelier";
$connect=new mysqli($servername,$username,$password,$dbname);
if (!$connect)
    die("la connection a échoué");
else
//echo " connecté avec succès ";


 ?>