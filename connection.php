<?php
session_start();
$con=mysqli_connect("localhost","root","","ovinob");
if(!$con){
	echo "MySQL Error:".mysqli_error();
}

?>