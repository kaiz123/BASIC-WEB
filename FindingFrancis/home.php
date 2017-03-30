<?php 
session_start();
//guard against direct acess to internal pages without login
if(!isset($_SESSION["id"])){
	header("Location: login.php");
}

 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
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
	</style>
</head>
<body>
<img width="1000" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
 HELLO <?= $_SESSION["username"] ?><br><br>
 <a href="logout.php">LOGOUT</a>

 	<div>
 	<ul>
 		<li>
 		<a href="friends.php">Friends</a>
 		</li>
 		<li>
 		<a href="findings.php"> &nbsp;Find the bugger</a>
 		</li>
 	</ul>
 	</div>
</body>
</html>