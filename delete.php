<?php 
require_once("function.php");
require_once("connection.php");

if(!loggedin())
  {
       header('Location: admin.php');
  }

$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE id=$id";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
header('Location:adminpanel.php');


 ?>