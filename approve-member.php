<?php
require_once("connection.php");
require_once("function.php");

if(!loggedin())
  {
       header('Location: admin.php');
  }

//require_once("function.php");
   $id = $_GET['id'];
   $memberid = $_POST['memberid'];
 
?>
<!-- data save from pendingstudent table -->
<?php
 
 $sql = "SELECT * FROM `pendingstudent` WHERE id = $id LIMIT 1";
 $run = mysqli_query($con,$sql);
 if ($run) {
  while ($row = mysqli_fetch_array($run)) {
   $name  = $row['name'];
   $fathername  = $row['fathername'];
   $mothername  = $row['mothername'];
   $paddress  = $row['paddress'];
   $peraddress  = $row['peraddress'];

   $birthday  = $row['birthday'];
   $blood  = $row['blood'];
   $email  = $row['email'];
   $facebook  = $row['facebook'];
   $mobile  = $row['mobile'];
   $school  = $row['school'];
   $class  = $row['class'];
   $role  = $row['role'];
   $subject  = $row['subject'];
   $gender  = $row['gender'];
   $photo  = $row['photo'];
   


  }
 }

      ?>



<!-- php for insert to student table -->
   <?php
 
$sql = "INSERT INTO `student`(`id`, `memberid`, `name`, `fathername`, `mothername`, `paddress`, `peraddress`, `birthday`, `blood`, `email`, `facebook`, `mobile`, `school`, `class`, `role`, `subject`, `photo`, `gender`) VALUES (NULL,'$memberid','$name','$fathername','$mothername','$paddress','$peraddress','$birthday','$blood','$email','$facebook','$mobile','$school','$class','$role','$subject','$photo','$gender')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo '
  <div class="alert alert-info text-center" style="color: green;">
    <h4>Successfully Approved !!</h4><br>
  
</div>
';

   ?>  
 <!-- php for delete approved data from pendingstudent -->
 <?php 
 $sql = "DELETE FROM `pendingstudent` WHERE id=$id";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  header('Location:pending-member.php');
  ?>