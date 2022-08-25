<?php
session_start();
if(!isset($_SESSION['userId'])){ header('location:login.php');}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Notice</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>

</head>
<body style="background:#047eb3;background-size: 100%">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: #32A9CD;">
   <img src="images/abc.png" width="300" height="50" alt="" style="background-color: white;">
 <!-- <a class="navbar-brand" href="#">
    <img src="images/abc.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i class="d-inline-block  fa fa-building fa-fw"></i> 
    <?php define("bankname","Welcome to bank"); echo bankname; ?>
  </a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <!-- <li class="nav-item active ">  <a class="nav-link" href="accounts.php">Accounts</a></li>-->
      <!--<li class="nav-item ">  <a class="nav-link" href="statements.php">Account Statements</a></li>-->

      <!--<li class="nav-item ">  <a class="nav-link" href="transfer.php">Funds Transfer</a></li>-->
      <!-- <li class="nav-item ">  <a class="nav-link" href="profile.php">Profile</a></li> -->
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="statements.php"> Details</a></li>
      <li class="nav-item ">  <a class="nav-link" href="https://vtu.ac.in/en/" target="_blank">Apply For Exam</a></li>
      <li class="nav-item ">  <a class="nav-link" href="resources.php" target="_blanck">Resources</a></li>
      <li class="nav-item ">  <a class="nav-link" href="request.php" >Request for certificates</a></li>


    </ul>
    <?php include 'sideButton.php'; ?>
   
  </div>
</nav><br><br><br>
<div class="container">
  <div class="card  w-75 mx-auto">
  <div class="card-header text-center">
    Notification from VVIET
  </div>
  <div class="card-body">
    <?php 
      $array = $con->query("select * from notice where userId = '$_SESSION[userId]'");
      if ($array->num_rows > 0)
      {
        while ($row = $array->fetch_assoc())
        {
          echo "<div class='alert alert-success'>$row[notice]</div>";
        }
      }
      else
        echo "<div class='alert alert-info'>Notice box empty</div>";
     ?>
  </div>
  <div class="card-footer text-muted">
   <?php echo 'Welcome to VVIET' ?>
  </div>
</div>

</div>
</body>
</html>