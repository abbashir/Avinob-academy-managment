<?php
ob_start();
require_once("function.php");
require_once("connection.php");

if(!loggedin())
  {
       header('Location: admin.php');
  }
//require_once("function.php");
?>
<!-- Count Pending Member Number -->
<?php
 $member = 0;
 $sql = "SELECT * FROM `pendingstudent`";
 $run = mysqli_query($con,$sql);
 if ($run) {
  while ($row = mysqli_fetch_array($run)) {
   $member = $member+1;
  
  }
 }

      ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap-social.css" />
	

	<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
 th{
    font-size: 12px;
    font-weight: bold;
    color: white;
    background: #6453A1;
  }
  td{
    font-size: 12px;
  }
</style>


<!-- java csript for print -->

</head>
<body>
	<div class="container-fluid">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" style="background: ;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Ovinob Academy</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="mynav nav navbar-nav">
              <li class="active"><a href="adminpanel.php">Members</a></li>
              <li><a href="pending-member.php">Pending member
               <span class="badge" style="background: red;"><?php echo "$member"; ?></span>
            </a></li>
            <li><a href="inbox.php">inbox</a></li>
              
            </ul>
            <ul class="mynav nav navbar-nav navbar-right">
          <li><a href="index.php">Registration</a></li>
          <li><a href="message.php">Message</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>







  <?php
  $id = $_GET['id'];
 $sql = "SELECT * FROM `student` WHERE id = $id LIMIT 1";
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
   //$pinno  = $row['pinno'];
    $photo  = $row['photo'];


  }
 }

      ?>
    
	<div class="container-fluid" style=" margin-top: 20px; padding-top: 50px;">
  <legend class="text-center"><h3>Member name:<?php echo "$name"; ?></h3></legend>
  
  </div>
  <script>
function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
  document.body.innerHTML = restorepage;
}
</script>
  <div id="div1"> <!-- pdf div -->
  <div class="container">
  <div class="panel panel-default">
    <!-- <div class="panel-heading text-center">
       <img src="profilepic/gravatar.jpg" class="img-responsive" width="100" height="100">
      <h3 style="color: #1ABC9C;">Registration form</h3>
    </div> -->
    <div class="panel-body">
      <form style="margin-top: 30px;" action="" method="post" class="form-horizontal" role="form" accept-charset='UTF-8' enctype="multipart/form-data">


        <div class="container-fluid">
         <div class="left">
          <?php
          if (empty($photo)) {
             echo "<img src=\"profilepic/gravatar.jpg\" class=\"img-responsive img-thumbnail\" width=\"100\" height=\"100\">";
           } else {
             echo "<img src=\"profilepic/$photo\" class=\"img-responsive img-thumbnail\" width=\"100\" height=\"100\">";
           }
            
           ?>
           <br>
            <input type="file" name="pic">
         </div>
          <div class="mid">
         <h3>Avinob Academy</h3>
         <h5>Dhaka,motijhil,kulla para-281</h5>
         </div>
          <div class="right">
            <img src="img/logo.jpg" class="img-responsive" width="100" height="100" style="margin-left: 250px;">
         </div>
         </div>

<hr>
      <div class="form-group" style="margin-top: 20px;">
          <label for="firstName" class="col-sm-3 control-label">Full Name*</label>
          <div class="col-sm-6">
              <input type="text" value="<?php echo "$name"; ?>" id="firstName" name="fullname" class="form-control" autofocus required="required">
             
          </div>
      </div>

      <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Father Name*</label>
          <div class="col-sm-6">
              <input type="text" value="<?php echo "$fathername"; ?>" id="email" name="fathername" class="form-control" required="required">
          </div>
      </div>

       <div class="form-group">
          <label for="email" class="col-sm-3 control-label">Mother Name</label>
          <div class="col-sm-6">
              <input type="text"  value="<?php echo "$mothername"; ?>" id="email" name="mothername" class="form-control" required="required">
          </div>
      </div>

      <div class="form-group">
                 <label for="textarea" class="col-sm-3 control-label">Present Address:</label>
                 <div class="col-sm-6">
    <input type="text"  value="<?php echo "$paddress"; ?>" id="email" name="paddress" class="form-control" required="required">

                 </div>
             </div>

             <div class="form-group">
                 <label for="textarea" class="col-sm-3 control-label">Permanent Address:</label>
                 <div class="col-sm-6">
          <input type="text"  value="<?php echo "$peraddress"; ?>" id="email" name="permanentaddress" class="form-control" required="required">

                 </div>
             </div>

    

      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
          <div class="col-sm-6">
              <input type="text" value="<?php echo "$birthday"; ?>" id="birthDate" name="birthday" class="form-control" required="required">
          </div>
      </div>

        <div class="form-group">
          <label for="country" class="col-sm-3 control-label">Blood Group</label>
          <div class="col-sm-6">
              <select id="country" name="bloodgroup" class="form-control" required="required">
                 <option value=" <?php echo "$blood"; ?>" selected="selected"> 
                  <?php echo "$blood"; ?>
                    
                  </option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  
                  
                  
             
              </select>
          </div>
      </div>

       <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">E-mail Id</label>
          <div class="col-sm-6">
              <input type="email" value="<?php echo "$email"; ?>" id="birthDate" name="email" class="form-control" required="required">
          </div>
      </div>


      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">Facebook Id</label>
          <div class="col-sm-6">
              <input type="text" value="<?php echo "$facebook"; ?>" id="birthDate" name="facebook" class="form-control" required="required">
          </div>
      </div>

      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">Mobile No</label>
          <div class="col-sm-6">
              <input type="number" value="<?php echo "$mobile"; ?>" id="birthDate" name="mobile" class="form-control" required="required">
          </div>
      </div>

      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">School Name</label>
          <div class="col-sm-6">
              <input type="text" value="<?php echo "$school"; ?>" id="birthDate" name="school" class="form-control" required="required">
          </div>
      </div>

      <div class="form-group">
          <label for="country" class="col-sm-3 control-label">Class</label>
          <div class="col-sm-6">
              <select id="country" name="class" class="form-control" required="required">
                <option value=" <?php echo "$class"; ?>" selected="selected"> 
                  <?php echo "$class"; ?>
                    
                  </option>
                    
                             <option value="One">One</option>
                            <option value="Two">Two</option>
                            <option value="Three">Three</option>
                            <option value="Four">Four</option>
                            

                            <option value="Five">Five</option>
                            <option value="Six">Six</option>
                            <option value="Seven">Seven</option>
                            <option value="Eight">Eight</option>
                            <option value="Nine">Nine</option>
                            <option value="Ten">Ten</option>
                            <option value="Eleven">Eleven</option>
                            <option value="Twelve">Twelve</option>
                 
                  
              </select>
          </div>
      </div>


      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">Role</label>
          <div class="col-sm-6">
              <input type="number" value="<?php echo "$role"; ?>" id="birthDate" name="role" class="form-control" required="required">
          </div>
      </div>

      <div class="form-group">
          <label for="birthDate" class="col-sm-3 control-label">Subject</label>
          <div class="col-sm-6">
            <select id="country" name="subject" class="form-control" required="required">
                <option value=" <?php echo "$subject"; ?>" selected="selected"> 
                  <?php echo "$subject"; ?>
                    
                  </option>
                   <option value="Song">Song</option>
                  <option value="Theatre">Theatre</option>
                  <option value="Recitation">Recitation</option>
               
              </select> 
          </div>
      </div>



      <div class="form-group">
          <label class="control-label col-sm-3">Gender</label>
          <div class="col-sm-6">
            <select id="country" name="gender" class="form-control" required="required">
                <option value=" <?php echo "$gender"; ?>" selected="selected"> 
                  <?php echo "$gender"; ?>
                    
                  </option>
                   <option value="Female">Female</option>
                  <option value="Male">Male</option>
                  
              </select> 
          </div>
      </div> <!-- /.form-group -->
      
      
      <div class="form-group">
          <div class="col-sm-6 col-sm-offset-3">
              <button type="submit" class="btn btn-primary btn-block" name="update">Save</button>
          </div>
      </div>
  </form> <!-- /form -->
    </div>
    <div class="panel-footer pull-right">
      <button class="btn btn-primary" onclick="printContent('div1')"><span class="glyphicon glyphicon-print"></span></button>

    </div>
  </div>
</div>

  </div> <!-- pdf div -->
  

  <!-- here we call the function that makes PDF -->


<!-- php for update -->

<?php 
 if(isset($_POST['update']))
    {

      $uploaddir = 'profilepic/'; 

    $pic = $_FILES['pic']['name'];

    $file = $uploaddir . basename($_FILES['pic']['name']); 

    move_uploaded_file($_FILES['pic']['tmp_name'], $file);
    
    if ($pic ==NULL) {
     $pic=$photo;
    } 


       $sql = "UPDATE `student` SET `name`='$_POST[fullname]',`fathername`='$_POST[fathername]',`mothername`='$_POST[mothername]',`paddress`='$_POST[paddress]',`peraddress`='$_POST[permanentaddress]',`birthday`='$_POST[birthday]',`blood`='$_POST[bloodgroup]',`email`='$_POST[email]',`facebook`='$_POST[facebook]',`mobile`='$_POST[mobile]',`school`='$_POST[school]',`class`='$_POST[class]',`role`='$_POST[role]',`subject`='$_POST[subject]',`photo`='$pic',`gender`='$_POST[gender]' WHERE id = $id";

       

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }


echo "<script> alert('Update successfull'); </script>";
header('refresh: 0');
    }

 ?>
	
  
<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.js"></script>

 
  
</body>
</html>