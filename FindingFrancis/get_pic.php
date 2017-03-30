<?php
session_start();
$pic_path=$_SESSION["profile_pic"];
$contents=file_get_contents($pic_path);

header("Content-Type: image/jpg");
echo $contents;
?>