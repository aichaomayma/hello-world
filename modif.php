<?php 
include("connect.php");
$id=$_GET['id'];
echo $id;
$sql="select*from formulaire where id='$id'";
$res=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
echo"<br>". mysqli_num_rows($res);
?>
<form action="modif2.php" method="post">

			<table>
				
				<tr>
					<td>matricule :</td>
					<td><input <input type="hidden" name="id" value="<?php echo $row['id']?>"></td>
					
				</tr>
				<tr>
					<td>nom :</td>
					<td><input type="text" name="nom" placeholder="tapez votre nom"
					 value="<?php echo $row['nom']?> "></td>
					
				</tr>
				<tr>
					<td>prenom :</td>
					<td><input type="text" name="prenom" placeholder="tapez votre prenom" value="<?php echo $row['prenom']?> "></td>
					
				</tr>
				<tr>
					<td>adresse :</td>
					<td><input type="text" name="adresse" placeholder="tapez votre adresse" value="<?php echo $row['adresse']?> "> </td>
					
				</tr>
				<tr>
					<td>email :</td>
					<td><input type="text" name="email" placeholder="tapez votre email" value="<?php echo $row['email']?> "></td>
					
				</tr>
				<tr>
					<td>date de naissance : </td>
					<td><input type="date" name="date_de_naissance" value="<?php echo $row['date_de_naissance']?> "> </td>
					
				</tr>
				<tr>
					<td>mot de passe :</td>
					<td><input type="password" name="password" placeholder="tapez votre mot de passe" value="<?php echo $row['password']?> "> </td>
				</tr>
				
				<tr>
					<td>numero de telephone :</td>
					<td><input type="int" name="num_telephone" placeholder="tapez votre numero de telephone" value="<?php echo $row['num_telephone']?> "> </td>
					
				</tr>
				<tr>
					<td><input type="submit" value="valider"> </td>
					<td><input type="reset" value="annuler"> </td>
				</tr>



				

			</table>
			


		</form>
