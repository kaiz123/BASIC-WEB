<?php
 $username = $_POST["username"];
   $password = $_POST["password"];

   //connect to db
   $conn = new mysqli("localhost","root","","find_francis");
   if ($conn -> connect_error){
   	echo "Error connecting please try again later";
   }
   else
   {
   $query="select * from users where username='$username' and password='$password'";
   $result=$conn->query($query);
   if($result->num_rows>0)
   {
   		
   		session_start();
   		if($row=$result->fetch_assoc())
   		{
   			$id=$row["id"];
   			$_SESSION["id"]=$id;
   			$_SESSION["username"]=$username;
            $_SESSION["profile_pic"]=$row["pic"];

   		}
   		header("Location: home.php");
   }
   else
   {

   	header("Location: login.php?error=1");//dummy get parameter
   }}

?>