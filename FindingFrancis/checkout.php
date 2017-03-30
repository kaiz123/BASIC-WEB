<!DOCTYPE html>
<?php
$hoodie=$_POST["hoodie"];
shoes="not applicable";//incase user clears cache
if(isset($_COOKIE["sh"]))
{
$shoes=$_COOKIE["sh"];
}
?>
<html>
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>login</title>
		<meta name="description" content="">
		<meta name="author" content="kaiz">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<?php
			//h is for 12 hour format H is for 24 hour format
			$hour = intval(date("H"));
			$greeting = "";
			if ($hour >= 0 and $hour <12){
				$greeting = "Good Morning";
			}
			else if($hour >= 12 and $hour <16){
				$greeting = "Good Afternoon";
			}
			else{
				$greeting = "Good Evening";
			}
		?>
		<div align="center">
			<h2>
				<i>(<?php echo $greeting; ?>)</i> here
			</h2>
			<img width="1000" height="200" src="images/dead_pool_yo.jpeg" /><br /><br />
		</div>
		<div align="center">
		<form action="checkout.php" method="post">
		<h3>TERA CART</h3>
		<input type="submit" value="confirm"><br><br>
		<table border="1" cellpadding="10">
			<tr>
				<td>
					Shoes
				</td>
				<td>
				<?php
					$src1="images/dead_pool_shoes".$shoes.".jpeg";
					?>
					<img src="<?= $src1?>">
				</td>
			</tr>	
			<tr>
				<td>
					Hoodies
				</td>
				<td>
					<?php
					$src="images/dead_pool_hoodie".$hoodie.".jpeg";
					?>
					<img src="<?= $src?>">
				</td>
			</tr>	
			

		</table>
		</form>

		</div>
	</body>
</html>
	