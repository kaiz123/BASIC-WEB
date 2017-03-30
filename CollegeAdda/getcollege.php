<?php
	$college=$_POST["college"];
	$paths=array("");
	$content=array("");
	$description=array("");
				
	//var_dump($college);
	setcookie("cn",$college,time()+60*60*24*1);
	if($_POST["park"]=="park")
	header("Location: park.php");
	else {
		$conn = new mysqli("localhost","root","","collegeadda");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later". $conn->connect_error;
   }
   else{
   	//check for username and password
   	//select * from parking where college= 'DJ SANGHVI' and 7<=time_end and 7>=timeslot
   	$query= "select * from foodadda where college='$college' ";
	//var_dump($query);
   	$result = $conn -> query($query);
	/*$result1 = $conn -> query($query);*/
	
	if($result -> num_rows > 0)
	{
				 
				 for($i=0;$row = $result -> fetch_assoc();$i++) 
					{
				 		$content[$i]=$row["food_adda_name"];
						$description[$i]=$row["description"];
						$query1= "select * from pictures where pid=".$row["pictureid"];
						if($result1 = $conn -> query($query1))
						$row1=$result1 -> fetch_assoc();
						$paths[$i]=$row1["picture_path"];
					}
					
   }		
   		}}
?>
				
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Full Slider - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: "Comic Sans MS";

		}
		.navbar{

			margin:0;
			border-radius: 0;
		}
		.last{
			background-color: #263238;
			text-align: center;
		}
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
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
						
		</nav>
    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner" class="col-sm-8" align="center" idaccesskey="corousel">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill"  style="background-image:url('<?= $paths[0]?>');"></div>
                <div class="carousel-caption">
                	<h1><?= $content[0]?></h1>
                	<p class="txt txt-primary"><h3><?=$description[0]?></h3></p>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $paths[1]?>');"></div>
                <div class="carousel-caption">
                    <h1><?= $content[1]?></h1>
                    <p class="txt txt-primary"><h3><?=$description[1]?></h3></p>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $paths[2]?>');"></div>
                <div class="carousel-caption">
                    <h1><?= $content[2]?></h1>
                    <p class="txt txt-primary"><h3><?=$description[2]?></h3></p>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $paths[3]?>');"></div>
                <div class="carousel-caption">
                    <h1><?= $content[3]?></h1>
                    <p class="txt txt-primary"><h3><?=$description[3]?></h3></p>
                    
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $paths[4]?>');"></div>
                <div class="carousel-caption">
                    <h1><?= $content[4]?></h1>
                    <p class="txt txt-primary"><h3><?=$description[4]?></h3></p>
                    
                </div>
            </div>
                       <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?= $paths[5]?>');"></div>
                <div class="carousel-caption">
                    <h1><?= $content[5]?></h1>
                    <p class="txt txt-primary"><h3><?=$description[5]?></h3></p>
                    
                </div>
            </div>
 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container-fluid last">

        <div class="row ">
        	 <h2><a href="login.php" ><u>LOGIN TO ADD YOUR OWN ADDA OR RATE THIS WEBPAGE</u></a></h2>

        </div>

        <hr>

        <!-- Footer -->
        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
    
</body>

</html>
