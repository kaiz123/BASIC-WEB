<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>login</title>
		<meta name="description" content="">
		<meta name="author" content="kaiz">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

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
			<fieldset>
			<ul>
 				<li>
 				<a href="shoes.php">Buy Merchandise</a>
 				</li>
 				</ul>
				<form action="auth.php" method="post">
						<input placeholder="Username" name="username" /><br/><br />
						<input placeholder="Password" name="password" /> <br/><br/>
						<input type="submit" value="Login" />&nbsp;&nbsp;&nbsp;&nbsp;<a href="html/register.html">Register</a>
				</form>
				<?php
				if(isset($_GET["error"]))
				{
					?>
				<span class="error">Invalid username/password</span>	
				<?php
				}
				?>

			</fieldset>
		</div>
	</body>
</html>
