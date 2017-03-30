<?php
   //super global variables can be accessed anywhere in php file $_ is used in naming it datatypes of these spv is associative array
   //$_post and $_get are associative array (like key and value hashtables) 
   //key username value pande
   //key password value 123
   //key gender value m
   //key country value India
   //SAVE EVERY PHP DOCUMENT IN HTDOCS OF XAMMP FOLDER AND RUN IT PASSING URL localhost/FOLDERNAME(NOT APTANA PROJECT NAME)/filename.php
   //font try to run program directly from aptana studio unless the folder name is same as the project name
   $originalpath=$_FILES["pic"]["tmp_name"];
   $destination_folder="E:/";
   $destination_filepath=$destination_folder.($_FILES["pic"]["name"]);
   if(!move_uploaded_file($originalpath, $destination_filepath))
      {
         echo "error";
      }
   else
   {
   $username = $_POST["username"]; 
   $password = $_POST["password"];
   $gender = $_POST["gender"];
   $country = $_POST["country"];
   
   //connect with database
   $conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later";
   }
   else{
   	//insert record in database
   	$query = "insert into users(username,password,gender,country,pic) values ".
   			"('$username','$password','$gender','$country','$destination_filepath')";
			var_dump($username);
	if($conn -> query($query) === TRUE){
		//it is used to redirect to some other page its an in built funtion syntax should always be Location: l caps and no space before :
		header("Location: login.php");
	}
	else {
		header("Location: html/register.html");
	}
   }}
   ?>