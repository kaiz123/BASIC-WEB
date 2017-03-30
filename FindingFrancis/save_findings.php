<?php
	session_start();
	if(!isset($_SESSION["id"])){
	header("Location: login.php");
}
 $id=$_SESSION["id"];
 $age=$_POST["age"];
 $height=$_POST["height"];
 $address=$_POST["address"];

  $conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later";
   }
   else{
   	$insert_query="insert into findings(age,height,address,user_id)values('$age','$height','$address','$id')";
   	if($conn -> query($insert_query) === TRUE){
		
		//header("Location: findings.php");
		echo "1";
	  }
	else
	{
		//header("Location: findings.php?error=1");
		echo "0";
	}

   }


?>