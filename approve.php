<?php
require_once("connection.php");

require_once("function.php");

if(!loggedin())
  {
       header('Location: admin.php');
  }
 $id = $_GET['id'];
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
	<title>approve</title>
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
               <span class="badge" style="background: red;">
                 <?php echo "$member"; ?>
               </span>
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
	<div class="container-fluid" style=" margin-top: 150px; padding-top: 50px;">

    
  </div>
  <div class="container">    
       
        <div id="signupbox" style="margin-top:10px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title" style="text-align: center;">Member Approve</div>
                           
                        </div>  
                        <div class="panel-body" >
  <form  class="form-horizontal" action="approve-member.php?id=<?php echo "$id" ?>" method="POST">
  
      <div class="form-group">
          <label for="firstname" class="col-md-4 control-label">Enter Member ID :</label>
          <div class="col-md-6">
              <input type="text" class="form-control" name="memberid" placeholder="EX:A-123">
          </div>
      </div>
      

   
      
      <div style="border-top: 1px solid #999; text-align: center; padding-top:20px"  class="form-group">

          <input class="btn btn-primary" type="submit" name="submit" value="Approve" style="margin-right: 10px;">
         <a href="adminpanel.php">
            <input class="btn btn-danger" type="button" value="Cancel"> 
         </a>


              
      </div>
      
      
      
  </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
	

<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>