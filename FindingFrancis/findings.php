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

   	$query="select * from findings where user_id=$id order by id desc";

   	$result=$conn->query($query);
   }

?>
<!DOCTYPE html>
<html>
<head>
	<title>findings</title>
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<img src="get_pic.php">
<div class="container">
	<img width="1000" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
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
 	<div class="row">
 	<div class="col-xs-4">

 	<div id="form">
 		<form >
 			<p>
 				<input type="text" name="age" placeholder="approx age" data-bind="value:age">
 			</p>

 			<p>
 				<input type="text" name="height" placeholder="approx height" data-bind="value:height">
 			</p>
 			<p>
 				<textarea name="address" data-bind="value:address">Address spot</textarea>
 			</p>
 			<p>
 				<input type="button" value="save" data-bind="click:onSave">
 			</p>
 		</form>
 		</div>
 		</div>
 	<div class="col-xs-8">
 		<div id="list">
 				<table class="table-striped table-hover table-bordered">
 					<thead>
 						<tr>
 							<th>Age</th>
 							<th>Height</th>
 							<th>Address</th>

 						</tr>

 					</thead>
 					<tbody data-bind="foreach:findings">
 					<tr>
 					<td data-bind="text: age"></td>
 					<td data-bind="text: height"></td>
 					<td data-bind="text: address"></td>

 					</tr>
 					<!-- 	<?php
 		while($row=$result->fetch_assoc()){
 		
 		?>
 			<tr>
 			<td><?= $row["age"] ?></td>
 			<td><?= $row["height"] ?></td>
 			<td><?= $row["address"] ?></td>

 			</tr>
 			<?php
 				}
 			?>	 -->
 	</table>

 	
 					</tbody>

 				</table>
 		</div>
 		

 		</div>
 		</div>
 	</div>
 	<script src="js/jquery-3.1.0.min.js"></script>
 	<script src="js/knockout-3.4.0.js"></script>
 	<script src="js/findings.js"></script>

	</body>
</html>