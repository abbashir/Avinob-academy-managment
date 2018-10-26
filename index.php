<?php 
require_once("connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Registration</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-social.css" />
         <!--  <script src="https://use.fontawesome.com/2426c1809d.js"></script> -->  <!-- for font awsam-->

 <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="style.css">



<!-- repeat js -->
  <script src="js/jquery-3.2.0.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
<style type="text/css">
    body {
    background-color: #fff;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    /*margin-left: 5em;*/
    margin-bottom: 1em;
}
label{
  color: #1ABC9C;
}

</style>
<style type="text/css">
    .error
    {
      border: 1px solid red;
    }
    .success
    {
      border: 1px solid green;
    }
  </style>

<script type="text/javascript">
    function myfuc()
    {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var msg="";
        if(name=="")
        {
          msg+="Required.";
           document.getElementById('name').className="error";
         document.getElementById('errormsg1').innerHTML="Required.";

        }
         if(email=="")
        {
          msg+="Required.";
        
       document.getElementById('email').className="error";
       document.getElementById('errormsg2').innerHTML="Required.";


        }
        if (msg="") 
        {
          return true;
        }
        else{
          return false;

        }

    }

    
    function validation()
    {
     var name = document.getElementById('name').value;
     var email = document.getElementById('email').value;
      if (name !="") {
       document.getElementById('name').className="success";
        document.getElementById('errormsg1').innerHTML="";

      }
       if (email !="") {
       document.getElementById('email').className="success";
        document.getElementById('errormsg2').innerHTML="";

      }

    }
  
  </script>

</head>
<body>
   <?php 
  if(isset($_POST['register']))
    {
      //form validation
      if($_POST['fullname']=='')
      {
         echo '<div class="alert alert-warning" style="text-align: center;">
    <strong>Warning!</strong> Please enter your name.
  </div>
';
        exit();
      }
    
      $subject = implode(',', $_POST['subject']);

      $pinno = rand(1111,9999);
      $uploaddir = 'profilepic/'; 

    $pic = $_FILES['pic']['name'];

    $file = $uploaddir . basename($_FILES['pic']['name']); 

    if (move_uploaded_file($_FILES['pic']['tmp_name'], $file)) 
    {   



$sql="INSERT INTO `pendingstudent` (`id`, `name`, `fathername`, `mothername`, `paddress`, `peraddress`, `birthday`, `blood`, `email`, `facebook`, `mobile`, `school`, `class`, `role`, `subject`, `photo`, `gender`, `pinno`) VALUES (NULL, '$_POST[fullname]', '$_POST[fathername]', '$_POST[mothername]', '$_POST[paddress]', '$_POST[permanentaddress]', '$_POST[birthday]', '$_POST[bloodgroup]', '$_POST[email]', '$_POST[facebook]', '$_POST[mobile]', '$_POST[school]', '$_POST[class]', '$_POST[role]', '$subject', '$pic', '$_POST[gender]', '$pinno')";

//echo $sql;


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo '
  <div class="alert alert-info text-center" style="color: green;">
    <h4>Registration Successfull !!</h4><br>
    your registration pin is : '.$pinno.'
    please save this pin for complete registration.
     <a href="index.php">Refresh</a>

</div>
';


    }
  }

   ?>  
   <div class="container-fluid">
            <form action="index.php" method="post" class="form-horizontal" role="form" accept-charset='UTF-8' enctype="multipart/form-data">
                <h4 class="text-center" style="color: #1ABC9C;">Registration Form</h4>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name*</label>
                    <div class="col-sm-9">
                        <input id="name" onsubmit="return myfuc()" type="text" id="firstName" name="fullname" class="form-control" autofocus >
                       
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Father Name*</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="fathername" class="form-control" required="required">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Mother Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="email" name="mothername" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                           <label for="textarea" class="col-sm-3 control-label">Present Address:</label>
                           <div class="col-sm-9">
            <textarea  id="textarea" name="paddress" class="form-control" rows="2" required="required"></textarea>
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="textarea" class="col-sm-3 control-label">Permanent Address:</label>
                           <div class="col-sm-9">
                               <textarea  id="textarea" name="permanentaddress" class="form-control" rows="2" required="required"></textarea>
                           </div>
                       </div>

              

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" name="birthday" class="form-control" required="required">
                    </div>
                </div>

                  <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Blood Group</label>
                    <div class="col-sm-9">
                        <select id="country" name="bloodgroup" class="form-control" required="required">
                           <option selected="selected">Select your blood group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="unknown">unknown</option>
                            
                            
                       
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">E-mail Id</label>
                    <div class="col-sm-9">
                        <input type="email" id="birthDate" name="email" class="form-control" required="required">
                    </div>
                </div>


                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Facebook Id</label>
                    <div class="col-sm-9">
                        <input type="text" id="birthDate" name="facebook" placeholder="www.facebook.com/" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Mobile No</label>
                    <div class="col-sm-9">
                        <input type="number" id="birthDate" name="mobile" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">School Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="birthDate" name="school" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Class</label>
                    <div class="col-sm-9">
                        <select id="country" name="class" class="form-control" required="required">
                           <option selected="selected">Select your Class</option>
                           <option value="Narsary">Narsary</option>
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
                    <div class="col-sm-9">
                        <input type="number" id="birthDate" name="role" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-2 control-label">Subject</label>
                    <div class="col-sm-10">
                      <div class="radio">
                    <label style="color:gray;">
                        <input type="checkbox" name="subject[]" id="input" value="Song" >
                       Song
                    </label>
                        <label style="color:gray;">
                        <input type="checkbox" name="subject[]" id="input" value="Theatre" >
                        Theatre
                    </label>
                        <label style="color:gray;">
                        <input type="checkbox" name="subject[]" id="input" value="Recitation">
                        Recitation
                    </label>
                </div>  
                    </div>
                </div>
               



                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline" style="color:gray;">
                                    <input type="radio" id="femaleRadio" name="gender" value="Female" required="required">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline" style="color:gray;">
                                    <input type="radio" id="maleRadio" name="gender" value="Male">Male
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                
                 <div class="form-group">
                  <label for="birthDate" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                        <input type="file" id="birthDate" name="pic" class="" required="required">
                    </div>
                </div>

                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

     



<?php
// 5. data base connection close...........
    mysqli_close($con);

    ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.0.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>