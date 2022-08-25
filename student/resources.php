<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Resources</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>

</head>
<body style="background:#047eb3;background-size: 100%">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #32A9CD;">
   <img src="images/abc.png" width="300" height="50" alt="" style="background-color: white;">
 
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="statements.php"> Details</a></li>
      <li class="nav-item ">  <a class="nav-link" href="https://vtu.ac.in/en/" target="_blank">Apply For Exam</a></li>
	  <li class="nav-item active">  <a class="nav-link" href="resources.php" target="_blanck">Resources</a></li>
      <li class="nav-item ">  <a class="nav-link" href="request.php" >Request for certificates</a></li>	  
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->


    </ul>
    <?php include 'sideButton.php'; 
   ?>


	
   
  </div>
</nav><br><br><br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card-header text-center">
    Your Attendance Information
  </div>
  <div class="card-body">
    <table class="table table-striped table-dark w-75 mx-auto">
  <!-- <thead>
    <tr>
      <td scope="col">Usn</td>
      <th scope="col"><?php echo $userData1['usn']; ?></th>
    </tr>
  </thead> -->
  <tbody>
  <tr>
      <th scope="row">Usn</th>
      <td><?php echo $userData1['usn']; ?></td>
    </tr>
    <tr>
      <th scope="row">Name</th>
      <td><?php echo $userData1['name']; ?></td>
    </tr>
    <tr>
      <th scope="row">SEM</th>
      <td><?php echo $userData1['sem']; ?></td>
    </tr>
	<!-- <tr>
      <th scope="row">Subject</th>
      <td><?php echo $userData1['subname']; ?></td>
    </tr>
	<tr>
      <th scope="row">Subject Code</th>
      <td><?php echo $userData1['subcode']; ?></td>
    </tr>
	<tr>
      <th scope="row">Faculty Name</th>
      <td><?php echo $userData1['facaultyname']; ?></td>
    </tr>
	<tr>
      <th scope="row">Status</th>
      <td><?php echo $userData1['status']; ?></td>
    </tr>
	<tr>
      <th scope="row">IA-1</th>
      <td><?php echo $userData1['ia1']; ?></td>
    </tr>
	<tr>
      <th scope="row">IA-2</th>
      <td><?php echo $userData1['ia2']; ?></td>
    </tr>
	<tr>
      <th scope="row">IA-3</th>
      <td><?php echo $userData1['ia3']; ?></td>
    </tr>
	<tr>
      <th scope="row">Contact No.</th>
      <td><?php echo $userData1['mobile']; ?></td>
    </tr> -->
	
	<?php
  
	
	if($numrows != 0) {

        while($row = $query->fetch_array()) {
				
				echo "<tr><th scope='row'>".$row['descreption']."</th>";
				echo "<td><a download='' href=".'resources/'.$row['documentname'].'.pdf'.">DOWNLOAD</a></td></tr>";

        }
    }
	?>
	
	

  </tbody>
</table>
      
  </div>
  <div class="card-footer text-muted">
   <?php echo "Account Summary" ?>
  </div>
</div>

</div>
</body>
</html>