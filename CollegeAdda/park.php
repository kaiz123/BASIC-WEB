

<!DOCTYPE html>
<html>
<head>
	<title>park</title>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<style type="text/css">
		
		.bg1{

			background-color: green;
			color:red;
		}
		.bg2{

			background-color: grey;
			color:white;
		}
		.bg3{

			background-color: #b2ebf2;
			color:black;

		}
		body{
			font-family: "Comic Sans MS";

		}
		.navbar{

			margin:0;
			border-radius: 0;
		}
		.b4{

			background-color: #dce775;
			
		}
		.c{
			padding-top: 70px;
			padding-bottom:30px;
		}
		.c1{
			padding-left: 50%;
			
		}
		.footer{

			background-color: black;
			color: white;
			margin:0;

		}
		.co1{

			color: red;
			font-weight: bold;

		}
		.invisible{

			display: none;
		}
		.visible{
			display: inline;
		}
		.c2{

			
			color: black;
			background-color: #ff5733;
			text-decoration: underline;
		}
		a {
    color: #ffffff;
    text-decoration: underline;
}
.body{
background-image: url(images/parking.jpg);
background-repeat: no-repeat;
background-position: center center center center;
background-size: cover;

}
.btn{
	color: #F57C00;
	background-color:#000000; 
}
a:hover, a:focus {
    color: #c6ff00;
    text-decoration: underline;
}
.colr{

	color: #F57C00;
	align-content: center;
	font-weight: bold;
}
.dynamic{
	text-align: center;
	color: #009688;
	font-family: "Comic Sans MS";
}
div p h3 a{
		text-decoration: none;
	}
	.places{
		color: #F57C00;
		font-weight: bold;
	}
	</style>
}
	
	
</head>
<body class="body">
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
<div class="colr container-fluid text-center c ">
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
		<h2>
				<i><?php echo $greeting; ?></i>
		</h2><br /><br />
		<div>
			<a href="park.php">Parking home</a>
		</div>
	<p class="bg-primary"><h3>Enter time in 24 hour format (only hours)</h3><br></p>
	<!--<button class="btn" data-bind="click: setCurrent">set current time</button>-->
	
		<input type="text" id="timepicker" data-bind="value: t"  ><span id="timepicker"></span></input>
		<button class="btn btn-success"  data-bind="click: onSub">Submit</button>
		<p class="txt txt-info" id="setTime"></p>
</div>
</div>
	
		
		
	<div class="container-fluid dynamic">
		<p class="text bg-primary"><h3 id="pspot"></h3></p>
	</div>
	
	<div class="container-fluid">
		<button class="btn btn-info" data-bind="click: allParking">Get all parking locations</button>
	</div>
	<div class="cols-sm-8" align="center">
	<table class="table  table-bordered">
							<thead>
								<tr>
									<th>Place</th>
									<th>Time</th>
								</tr>
							</thead>
							<tbody class="places" data-bind="foreach: parking">
								<tr>
									<td data-bind="text: place"></td>
									<td data-bind="text: timeslot"></td>
								</tr>	
							</tbody>
				</div>
	<script src=js/knockout-3.4.0.js></script>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link href="css/jquery-ui.min.css" type="text/css"/>
	<script  src="js/knockout-3.4.0.js"></script>
	<script src="js/park.js"></script>
</body>
</html>