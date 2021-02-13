
<?php
include("connect.php");
$SQL="select *from formulaire";
 $res=mysqli_query($connect,$SQL);
 //$row=mysqli_fetch_assoc($res);
// print_r($row);
// Echo "<br>".$row['matricule'];

?>-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="image/imag11.jpg">
	<td align="right" width="300"  ><a  href="base.php"><font size="20" color="brown" size="5"><b> <- retour</b></font> </a></td>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

 
 <table align="center"><tr>
<td>
<input type="button"  class="bouton"value="inscrir " onclick="document.location.href='formulaire.php';"></td>

</tr>


<style>
.bouton {
  background-color:brown;
  border: 10;
  border-color: black;

  color: black ;
  width: 200px;
  margin: 10px;
  text-align: center;
  text-decoration:;
  display: inline-block;
  font-size: 19px;
  cursor: pointer;
}
</style>
</table>
 

 <table border="2" bordercolor="pale"  border="5" align="center" size="500" widht="300" bgcolor="silver">
 	
 	<tr>
 		<td  align="center" bgcolor="yellow"><b>matricule</b></td>
 		<td  align="center" bgcolor="yellow"><b>nom</b></td>
 		<td  align="center" bgcolor="yellow"><b>prenom</b></td>
 		<td  align="center" bgcolor="yellow"><b>adresse</b></td>
 		<td  align="center" bgcolor="yellow"><b>email</b></td>
 		<td  align="center" bgcolor="yellow"><b>date_de_naissance</b></td>
 		<td  align="center" bgcolor="yellow"><b>password</b></td>
 		<td  align="center" bgcolor="yellow"><b>num_telephone</b></td>

 	</tr>
 	<?php while ( $row=mysqli_fetch_assoc($res)) 
 	{
 		# code...
 	?>
 	<tr>
 		<td ><?php Echo $row['id']?></td>
 		<td ><?php Echo $row['nom']?></td>
 		<td ><?php Echo $row['prenom']?></td>
 		<td ><?php Echo $row['adresse']?></td>
 		<td ><?php Echo $row['email']?></td>
 		<td ><?php Echo $row['date_de_naissance']?></td>
 		<td ><?php Echo $row['password'] ?></td>
 		<td> <?php echo $row['num_telephone']?></td>
 		<td>
 			<a href="modif.php?id=<?php Echo $row['id']?>"><button type="button">modifier</button> </a>
 		<a href="supp.php?id=<?php Echo $row['id']?>"> <button type="button">supprimer</button> </a>
 	</td> 

 	</tr>
<?php
 }
  ?>
 </table>
</body>
</html> 
   