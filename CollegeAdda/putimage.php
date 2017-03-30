<?php
    $original_path = $_FILES["foodPic"]["tmp_name"];
	$destination_path = "C:/xampp/htdocs/CollegeAdda/images";
  	$destination_file_path = $destination_path . $_FILES["foodPic"]["name"];
  	$destination_file_path=substr($destination_file_path,strpos("$destination_file_path", "images"));
	
	$name=$_POST["name"];
	$desc=$_POST["description"];
  if(!move_uploaded_file($original_path, $destination_file_path)){
  	echo "Error juploading pic";
  }
  else
   {
   	
	   //connect with database
	   $conn = new mysqli("localhost","root","","collegeadda");
	   if ($conn -> connect_error){
	   	echo "Error connecting please try again later";
	   }
	   else{
		   	//insert record in database
		   	if(isset($_COOKIE["cn"]))
			{
				$college=$_COOKIE["cn"];
				
			
			if($college==="DJ SANGHVI")
						{
							   $query0="select pictureid from foodadda where fid=8";
							   $query1="UPDATE `foodadda` SET `food_adda_name`='$name',`description`='$desc' WHERE fid=8";
						}
			else if($college==="MITHIBAI")
			{
				$query0="select pictureid from foodadda where fid=14";
			    $query1="UPDATE `foodadda` SET `food_adda_name`='$name',`description`='$desc' WHERE fid=14";
			}
			else if($college==="THADOMAL")
			{
				$query0="select pictureid from foodadda where fid=20";
			    $query1="UPDATE `foodadda` SET `food_adda_name`='$name',`description`='$desc' WHERE fid=20";
			}
	else {
			$query0="select pictureid from foodadda where fid=25";
			    $query1="UPDATE `foodadda` SET `food_adda_name`='$name',`description`='$desc' WHERE fid=25";
		}
				   $conn -> query($query1);
							$result = $conn -> query($query0);
								$row = $result -> fetch_assoc();
								
							if($result -> num_rows > 0)
							{
								$pid=$row["pictureid"];
								
							}
							   $query = "UPDATE `pictures` SET `picture_path`='$destination_file_path' WHERE pid=$pid";
						}
						if($conn -> query($query) === TRUE){
													header("Location: main.php");
												
												}
												else {
													var_dump($query);		
												
													header("Location: rate.php");
												}
						
				
					
	   }
   }
   ?>