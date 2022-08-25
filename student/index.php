<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Students</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/db.php'; ?>
  <?php require 'assets/function.php'; ?>

</head>

<body style="background:#047eb3;background-size: 100%">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background-color: pink;">
   <img src="images/abc.png" width="300" height="50" alt="" style="background-color: white;">
    <!-- <a class="navbar-brand" href="#">
    <img src="images/abc.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i class="d-inline-block  fa fa-building fa-fw"></i> 
    <?php define("bankname", "Welcome to bank");
    echo bankname; ?>
  </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item "> <a class="nav-link" href="accounts.php">Accounts</a></li>
        <li class="nav-item "> <a class="nav-link" href="statements.php"> Details</a></li>
        <li class="nav-item "> <a class="nav-link" href="https://vtu.ac.in/en/" target="_blank">Apply For Exam</a></li>
        <li class="nav-item "> <a class="nav-link" href="resources.php" target="_blanck">Resources</a></li>
        <li class="nav-item "> <a class="nav-link" href="request.php">Request for certificates</a></li>


      </ul>
      <?php include 'sideButton.php'; ?>

    </div>
  </nav><br><br><br><br><br>



  <div class="row w-100" style="padding-left: 60px;">
    <div class="col" style="padding: 22px;padding-top: 0">
      <div class="jumbotron shadowBlack" style="padding: 25px;min-height: 241px;max-height: 241px">
        <h4 class="display-5">Welecome to VVIET</h4>
        <p class="lead alert alert-warning"><b>Latest Notification:</b>

          <?php
          $array = $con->query("select * from notice where userId = '$_SESSION[userId]' order by autoIncrement desc LIMIT 1");
          if ($array->num_rows > 0) {
            $row = $array->fetch_assoc();
            //{
            echo $row['notice'];
            //}
          } else
            echo "<div class='alert alert-info'>Notice box empty</div>";
          ?></p>

      </div>
      <div id="carouselExampleIndicators" class="carousel slide my-2 rounded-1 shadowBlack" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/college.jpg" alt="First slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/1122.jpeg" alt="Second slide" style="max-height: 250px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/22.jfif" alt="Third slide" style="max-height: 250px">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col">
      <div class="row w-100" style="padding: 22px;padding-top: 0">
        <div class="col">
          <div class="card shadowBlack ">
            <img class="card-img-top" src="images/accountdetails1.png" style="max-height: 155px;min-height: 155px" alt="Card image cap">
            <div class="card-body">
              <a href="accounts.php" class="btn btn-outline-success btn-block">Account Details</a>
            </div>
          </div>
        </div>
        <div class="row" style="padding: 40px 100px;">
          <div class="col">
            <div class="card shadowBlack">
              <img class="card-img-top" src="images/bell.gif" style="max-height: 155px;min-height: 155px;" alt="Card image cap">
              <div class="card-body">
                <a href="notice.php" class="btn btn-outline-primary btn-block">Check Notification</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadowBlack ">
              <img class="card-img-top" src="images/contacts.gif" alt="Card image cap" style="max-height: 155px;min-height: 155px">
              <div class="card-body">
                <a href="feedback.php" class="btn btn-outline-primary btn-block" id="feedback">Feed Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


</body>

</html>