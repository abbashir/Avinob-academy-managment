<?php 
require_once("connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Ready make Template</title>

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
        alert(name);
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

   <div class="container-fluid">
    <?php 
  if(isset($_POST['message']))
    {
         

$sql="INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[message1]');";

//echo $sql;


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo '
    <div class="alert alert-success text-center"><h4>Successfully send</h4></div>

';


    }
 
   ?>      



<?php
// 5. data base connection close...........
    mysqli_close($con);

    ?>
            <form method="post" action="message.php" class="form-horizontal" role="form" accept-charset='UTF-8' enctype="multipart/form-data" onsubmit="return myfuc()">
                 <h4 class="text-center" style="color: #1ABC9C;">
                 Message/Comment
                </h4>                
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" id="name" onkeypress="validation()"  >
                        <div id="errormsg1" style="color: red;"></div>
                       
                    </div>
                </div>


                 

                 <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">E-mail Id</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" placeholder="Example@gmail.com" id="name" onkeypress="validation()" >
                        <div id="errormsg2" style="color: red;"></div>
                    </div>
                </div>
              
              <div class="form-group">
                 <label for="birthDate" class="col-sm-3 control-label">Message</label>
                           <div class="col-sm-9">
               <textarea  id="textarea" name="message1" class="form-control" placeholder="Write your message" rows="2" ></textarea>
                           </div>
                       </div>

                
                
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block" name="message">Send</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.0.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>