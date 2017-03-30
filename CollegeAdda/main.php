<!DOCTYPE html>
<html>
	<head>
	<title>HOME</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/green.css">
		<style type="text/css">
		body{
			font-family: "Comic Sans MS";

		}
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

a:hover, a:focus {
    color: #c6ff00;
    text-decoration: underline;
}
	</style>
	

</div>
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
			<!--
			<div class="collapse navbar-collapse" id="myNavbar">
										<ul class="nav navbar-nav">
											<li ><a href="#">About Us</a></li>
											<li ><a href="#">Contact Us</a></li>
										</ul>
						</div>
						-->
						
		</nav>

	
  <section class="main-gallery" id="home" data-bind="visible:home">
    <div class="overlay">
      
     
              <div class="col-md-12 text-center">
                 <h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.25s, then enter top and move 80px over 1s">WELCOME TO THE COLLEGE ADDA!</h1>
            <form method="post" action="getcollege.php"> 
                <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">GET SPACE TO PARK AND FIND YOUR FAVOURAITE ADDAS AROUND ANY COLLEGE IN MUMBAI</p>
              </div>
              <br /><br /><br /><br />
              
             <!-- <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="text-center top40">
                            <a href="#" class="btn btns white-background themecolor fadeInDown">App Store</a>
                            <a href="#" class=" btn btns theme_background_color white fadeInLeft">Google Play</a>
                            <a href="#" class="btn btns black-background white fadeInRight">Signup Free</a>

                        </div>
                    </div>-->
              
          
    
    <div class="container-fluid text-center c  ">
			<span class="co1" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">ENTER COLLEGE-</span><br>
			<datalist name="collegedatalist" id="collegelist">
						<option ><span>DJ SANGHVI</span></option>
						<option ><span>MITHIBAI</span></option>
						<option ><span>THADOMAL</span></option>
						<option ><span>THAKUR</span></option>
			</datalist>
			<input type="text" name="college" list="collegelist" data-bind="value:title" class="bg3" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">
			<button type="button" id="conf"  
			class=bg3 class="btn btn-success" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">Enter</button><br>
			
		
		
		 
		</div>
		</div>
      
  </section>
		<div class="text-center container-fluid bg1">
		
		
		</div>

	<section id="services">
        <div class="container" id="serve"  data-bind="visible:serve" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">
            <div class="row">
                <div class="col-lg-12 text-center"><br /><br />
                    <h2 class="section-heading">START THE JOURNEY!</h2><br /><br />
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <!--
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                                <i class="fa fa-stack-1x fa-inverse"></i>-->
                        
                       <img class="fa fa-circle fa-stack-2x text-primary img-circle" src="images/select1.jpg"></img>
                    </span>
                    <h4 class="service-heading">SELECT COLLEGE</h4>
                    <p class="text-muted">SELECT THE COLLEGE YOU WANT TO EXPLORE!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
<!--
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-stack-1x fa-inverse"></i>-->

                       <img class="fa fa-circle fa-stack-2x text-primary img-circle" src="images/select2.jpg"></img>
                    </span>
                    <h4 class="service-heading">PARK</h4>
                    <p class="text-muted">KNOW WHERE TO PARK AT THE CORRECT TIME</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <!--
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                                <i class="fa fa-stack-1x fa-inverse"></i>-->
                        
                       <img class="fa fa-circle fa-stack-2x text-primary img-circle" src="images/select3.jpg"></img>
                    </span>
                    <h4 class="service-heading">EAT</h4>
                    <p class="text-muted">EAT AT THE BEST ADDAS AROUND.</p>
                </div>
            </div>
        </div>
    </section>
    	
		<div align="center"><img id="img" width="75%"  height="550" class="fadeInDown" data-bind="attr:{src:'images/'+imagepath()},visible:show">
		            <div class="text-center top40" data-bind="visible:show">
                            <input type="submit" name="park" class="btn btns btn-success fadeInDown" value="park"></input>
                            <input type="submit" name="park" class="btn btns btn-success fadeInDown" value="food"></input>
                          

                        </div></div>
                        </form>
		</div>
		
		<br><br>
	
	  <script src=js/knockout-3.4.0.js></script>
		<script src="library/modernizr.custom.97074.js"></script>
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src=js/main.js></script>
		<script src="library/vegas/vegas.min.js"></script>
	<!-- [ PLUGIN SCRIPT ] -->
        
	<script src="js/plugins.js"></script>
        <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
	<script src="js/scrollreveal.js"></script>
       	 <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
  
	</body>
</html>