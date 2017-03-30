<!DOCTYPE html>
<html lang="en">
	<head>
		<style type="text/css">
			.profile-img
			{
			    width: 96px;
			    height: 96px;
			    display: block;
			    margin-top: 40px;
			    margin-left:40%;
			    margin-bottom:30px;
			    -moz-border-radius: 50%;
			    -webkit-border-radius: 50%;
			    border-radius: 50%;
			}
			.visible{
				display: block;
			}
			
			.main-center{
			 	margin-top: 30px;
			 	marginleft:auto;
			 	max-width: 500px;
			    padding: 40px 40px;
			    border-radius:5% 5% 5% 5%;
				background: #B3E5FC;
			}
	
	
			nav div{
				padding-right: 10px;
			}
			nav div ul li{
				padding-right: 5px;
			}
			div{
				font-family: "Comic Sans MS";
				

			}
			.greeting{
				margin-top: 10px;
			}
			.heading{
				margin-top: 70px;			
			}
			
			.invalid{
				display: inline;
			}
			.invisible{
				display: none;
			}
			.checkbox{
				margin-left: 2%;
			}
			.last-div{
				display: inline-block;
			}
			.input-group{
				margin-left: 25%;
			}
			
		</style>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>login</title>
		<meta name="description" content="">
		<meta name="author" content="Yash">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="main.php"  class="navbar-brand title">CollegeAdda</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				    </button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li ><a href="#">About Us</a></li>
						<li ><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			<div class="page-header"><h2 class="heading">Welcome to CollegeAdda</h2></div>
		</div>
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
		<div align="center" class="greeting">
			<h2>
				<i>(<?php echo $greeting; ?>)</i>&nbsp;&nbsp;Login here
			</h2>
		</div>
		 <div class="main-center container-fluid text-center">
			  <div class="img-responsive">
						<img class="profile-img" src="images/user.jpg" class="img img-circle"/>
			  </div>
 			  <form method="post" action="auth.php" >
				      <div >
					      <label class="cols-sm-2 control-label" for="username">Username:</label>
					      <div class="input-group">
					      		<input type="username" data-bind="value: username,valueUpdate:'afterkeydown'" class="form-control" id="username" name="username" placeholder="Enter username"><p id="userwarning" class="text-warning invisible"><span class="glyphicon glyphicon-warning-sign"></span>Invalid username</p>
					      </div>		
					    
					  </div>
				    	<div >      
							  <label class="cols-sm-2 control-label" for="pwd">Password:</label>
						      <div class="input-group">
								  <input type="password" data-bind="value: password,valueUpdate:'afterkeydown'" class="form-control" id="pwd" name="password" placeholder="Enter password">
							  </div>	      	
							  
						</div>
						<br />      	
				    <!--
					<div class="checkbox" class="checkbox">
									  <span><input type="checkbox"> Remember me</span>
									 </div>
									-->
					 	<div class="cols-sm-3">
						 	<input  type="submit"  value="Login" class="btn btn-success"></input>
						 	<p class="text-warning"><a href="registration.php">Create Account</a></p>
						</div>	
						<?php if(isset($_GET["error"])) {?>
						<p class="txt txt-warning">INVALID USERNAME or PASSWORD</p>
						<?php  }  ?>
		</div>
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/knockout-3.4.0.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</body>
</html>
