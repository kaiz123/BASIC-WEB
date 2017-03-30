<?php
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thanks</title>
	<style>
		.invisible{
			display: none;
		}
		.last{
			background-color: #FFCDD2;
			colour:#000000;
		}
		.form{
			padding-top:35px;
			background-color: #00838F;
		}
		.form-group{
			margin-left: 30%;
		}
		#submit{
			display: block;
		}
	</style>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/agency.css" rel="stylesheet">
    <script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "336226",
            uid: "20a77911d83352379552a15e817c3e14",
            source: "website",
            options: {
                "size": "large",
                "style": "oxygen",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>

	</head>
	<body>
		<div class="container-fluid">
		<div align="right" class="last">
		 		<a href="logout.php"><h3>Logout</h3></a>
		 	</div>
		 	<div class="last" align="center">
		 		<p class="bg-info"><h3>Welcome <?= $_SESSION["name"]?></h3></p>
		 	</div>
	 </div>
	</div>
		 <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">THANK YOU FOR VISITING COLLEGE ADDA!</div>
                <div class="intro-heading">RATE US HERE-</div>
                <div class="rw-ui-container"></div>
                
               <!-- <button class="btn btn-info" data-bind="click: onAdd" class="page-scroll btn btn-xl" >ADD YOUR ADDA</button>-->
            </div>
        </div>
        
    </header>
    <div class="container-fluid form " id="visible" align="center">
	    	<form action="putimage.php" method="post"  enctype="multipart/form-data">
        		<div class="form-group col-sm-4">
        		<input type="text" class="form-control" name="name" placeholder="name"/><br />
        		</div>
        		<div class="form-group col-sm-4">
        			<input type="text" class="form-control" name="description" placeholder="description"/><br />
        		</div>
        		<div class="form-group col-sm-4"><br />
        		<input type="file" class="form-control" name="foodPic"   id="image"/>
        		</div>
        		
        		<input class="btn btn-success "  type="submit" id="submit" value="submit"/>
        	</form>
      </div>
	<script type="application/javascript" src="js/knockout-3.4.0.js"></script>
	<script type="application/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="application/javascript" src="js/rate.js"></script>
	</body>
</html