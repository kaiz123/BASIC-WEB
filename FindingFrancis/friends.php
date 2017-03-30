<?php
session_start();
if(!isset($_SESSION["id"])){
	header("Location: login.php");
}
$id=$_SESSION["id"];
 $conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later";
   }
   else{

   	$query="select * from users where id!=$id order by username";

   	$result=$conn->query($query);
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Friends</title>
	<style type="text/css">
		ul{

			display: inline;
		}
		ul li{
			display: inline;
		}
		ul li a{

			text-decoration: none;
		}
		table{
			border: 1px;
		}
	</style>
</head>
<body>
 HELLO
 <a href="logout.php">LOGOUT</a>
 	<div>
 	<ul>
 		<li>
 		<a href="friends.php">Friends</a>
 		</li>
 		<li>
 		<a href="findings.php">Find the bugger</a>
 		</li>
 	</ul>
 	</div>
 	<?php
 		if($result->num_rows>0){
 	?>
 			
 	<table>
 		<?php
 		while($row=$result->fetch_assoc()){
 		
 		?>
 			<tr>
 			<td><?= $row["username"] ?></td>
 			<td><?= $row["country"] ?></td>
 			<td><?= $row["gender"] ?></td>

 			</tr>
 			<?php
 				}
 			?>	
 	</table>
 	<?php
 		}
 		else{
 	?>
 	no friends dude!
 	<?php
 	}
 	?>		
</body>
</html>