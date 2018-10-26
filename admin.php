<?php
require_once("connection.php");
require_once("function.php");


?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="css/bootstrap-social.css" />
  

  <link rel="stylesheet" type="text/css" href="custom.css">

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

</head>
<body>
 
  <div class="container-fluid" style=" margin-top: 100px; padding-top: 50px;">

    
  </div>
  <div class="container">    
       
        <div id="signupbox" style="margin-top:10px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align: center;">Admin Area</div>
                           
                        </div>  
                        <div class="panel-body" >
  <form  class="form-horizontal" method="POST">
  
      <div class="form-group">
          <label for="firstname" class="col-md-4 control-label">Email :</label>
          <div class="col-md-6">
              <input type="Email" class="form-control" name="email" placeholder="example@gmail.com">
          </div>
      </div>

      <div class="form-group">
          <label for="firstname" class="col-md-4 control-label">Password:</label>
          <div class="col-md-6">
              <input type="Password" class="form-control" name="pass">
          </div>
      </div>
      

   
      
      <div style="border-top: 1px solid #999; text-align: center; padding-top:20px"  class="form-group">

          <input class="btn btn-primary" type="submit" name="submit" value="Login" style="margin-right: 10px;">


              
      </div>
      
      
      
  </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
  

<script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>

<?php 

       if(isset($_POST['submit'])){
            
            //$name=  mysqli_real_escape_string($connect,$name);
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $column=0;
      //2. perform query.........
       $sql="SELECT * FROM `admin` WHERE email='$email' AND pass='$pass' LIMIT 1";
       $sqle=  mysqli_query($con, $sql); //here $result is resource file of query
     if ($sqle) {
  while ($row=mysqli_fetch_array($sqle)) {
      $column = $column +1;
echo '<div class="alert alert-success" style="text-align: center;">
    <strong>You have successfully login!</strong>
  </div>
';   

 $_SESSION['id']=$row['id'];
    header('Location: adminpanel.php');
  }
  if ($column==0) {
echo '<div class="alert alert-warning" style="text-align: center;">
    <strong>Warning!</strong>do not match email or password!! please try again.
  </div>
';  }
}
       exit();
       }
       ?>



       <?php
// 5. data base connection close...........
    mysqli_close($con);

    ?>