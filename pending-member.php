<?php
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
	<div class="container-fluid" style=" margin-top: 20px; padding-top: 50px;">
  <legend class="text-center"><h3>
    Registration Pending member
    <span class="badge" style="background: red;"><?php echo "$member"; ?></span>


  </h3></legend>

    
  </div>
  <div class="container-fluid">
    <?php
   echo '<table class="table table-striped">
         <thead>
        <tr>
          <th>Pin No</th>
          <th>Name</th>
          <th>Father Name</th>
          <th>Mother Name</th>
          <th>Present Address</th>
          <th>Permanet Address</th>
          <th>Birthday</th>
          <th>Blood Group</th>
          <th>Email</th>
          <th>Facebook</th>
          <th>Mobile No</th>
          <th>School</th>
          <th>Class</th>
          <th>Role</th>
          <th>Subject</th>
          <th>Gender</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>

   ';
        $sql="SELECT * FROM pendingstudent ORDER BY id DESC";
        $sqle=mysqli_query($con,$sql);
        if ($sqle) {
          while ($row=mysqli_fetch_array($sqle)) {
           echo " <tr>
          <td>$row[pinno]</td>
          <td>$row[name]</td>
          <td>$row[fathername]</td>
          <td>$row[mothername]</td>
          <td>$row[paddress]</td>
          <td>$row[peraddress]</td>
          <td>$row[birthday]</td>
          <td>$row[blood]</td>
            <td>$row[email]</td>
          <td>$row[facebook]</td>
          <td>$row[mobile]</td>
          <td>$row[school]</td>
          <td>$row[class]</td>
          <td>$row[role]</td>

           <td>$row[subject]</td>
          <td>$row[gender]</td>
          
          <td>
          <a href=\"approve.php?id=$row[id]\" type=\"submit\" class=\"btn btn-primary\">Approve</a>
          </td>

          <td>
          <a href=\"delete.php?id=$row[id]\" type=\"submit\" class=\"btn btn-danger\">Delete</a>
          </td>
        </tr>
           ";


          }
        }
        echo ' </tbody>
    </table> ';
      ?>

  
    
  </div>




<script src="js/jquery-3.2.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>