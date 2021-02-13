<?php


session_start();

include("base1.php");
if (!isset($_SESSION['login'])) {
	header ('Location: indexx.php');
	exit();
}
?>

<html>
<head>
<title>Espace membre</title>
</head>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>