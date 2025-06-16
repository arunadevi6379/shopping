<?php
$servername="localhost";
$username="root";
$password="";
$db="apioop";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	die("CONNECTTION FAILED:".mysqli_connect_error());
}
?>