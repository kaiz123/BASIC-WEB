<?php
session_start();

$id=$_SESSION["id"];
 $conn = new mysqli("localhost","root","","find_francis");
 $findings=array();
   if ($conn -> connect_error){
   	echo "Error connecting please try again later";
   }
   else{

   	$query="select * from findings where user_id=$id order by id desc";

   	$result=$conn->query($query);
   }
   while ($row=$result->fetch_assoc()) {
   	$findings[]=$row;
   }
   $json_string=json_encode($findings);
   header("Content-Type:application/json");
   echo $json_string;

?>