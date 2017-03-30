<!DOCTYPE html>
<html lang="en">
	<head>
		<style type="text/css">
			nav{
				font-family: "Comic Sans MS";
			}
			.container{
				font-family: "Comic Sans MS";	
			}
			.main{
			 	margin-top: 70px;
			}
			
			h1.title { 
				font-size: 50px;				 
				font-weight: 400;
			}
			hr{
				width: 10%;
				color: #fff;
			}
			.form-group{
				margin-bottom: 15px;
			}
			
			label{
				margin-bottom: 15px;
			}
			
			input,
			input::-webkit-input-placeholder {
			    font-size: 11px;
			    padding-top: 3px;
			}
			
			.main-login{
			 	background-color: #E1F5FE;
			    /* shadows and rounded borders */
			    -moz-border-radius: 2px;
			    -webkit-border-radius: 2px;
			    border-radius: 2px;
			    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			
			}
			
			.main-center{
			 	margin-top: 30px;
			 	margin: 0 auto;
			 	max-width: 330px;
			    padding: 40px 40px;			
			}
			
			.login-button{
				margin-top: 5px;
			}
			
			.login-register{
				font-size: 11px;
				text-align: center;
			}
			body{
				font-family: "Comic Sans MS";
			}
			.warning{
				display: none;
			}
		</style>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>registration</title>
		<meta name="description" content="">
		<meta name="author" content="Yash">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand title" href="main.php">CollegeAdda</a>
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
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Enter Details</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" data-bind="submit: onRegister" >
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-pencil"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input data-bind="value: name,valueUpdate:'afterkeydown'" type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>
						<div>
							<div data-bind="foreach: phones" class="form-group">
								<label data-bind="text: numberType" for="phone" class="cols-sm-2 control-label"></label>
								<div class="input-group">
									<span class="input-group-addon glyphicon glyphicon-phone"></span>
									<input  type="tel" data-bind="value: phoneNumber" class="form-control" name="phone" id="phone"  placeholder="Enter Number"/>
								</div>
								<a data-bind="click: $root.onDelete">Delete</a><br>
							</div>
							<button data-bind="click: onAdd" class="btn btn-primary">Add Number</button>
						</div>
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" data-bind="value: username,valueUpdate:'afterkeydown'" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								
								</div>
							</div>
						</div>
						<div>
								<p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> atleast one capital character reqd</p>
								<p class="text-danger warning" id="userwarning">Username not allowed</p>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<!--<input type="password" data-bind="value: password,valueUpdate:'afterkeydown'" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>-->
									<input type="password" data-bind="value: password,valueUpdate:'afterkeydown'" class="form-control" name="password" id="passsword"  placeholder="Enter your Password"/>
`								</div>
							</div>
						</div>
						<div>
							<p class="text-info"><span class="glyphicon glyphicon-info-sign"></span> atleast 8 characters required</p>
							<p class=" text-warning warning" id="passwarning">Password too short</p>
						</div>
						

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" data-bind="value: password1,valueUpdate:'afterkeydown'" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>
						<div>
							<p class=" text-warning warning" id="confirmwarning">2 Passwords don't match</p>
						</div>
						
						<div class="form-group ">
							<button type="submit"  class="btn btn-primary btn-lg btn-block login-button " >Register</button> 
						</div>
						<div class="login-register">
				            <a href="login.php">Login</a>
				         </div>
				         
					</form>
				</div>
			</div>
		</div>
		<script src="js/jquery-3.1.0.min.js"></script>
		<script src="js/knockout-3.4.0.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/register.js"></script>
	</body>
</html>
