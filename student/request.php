<?php
session_start();
if (!isset($_SESSION['userId'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Request for files</title>
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
    <?php define("bankname", "Welcome to bank");
    echo bankname; ?>
  </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item "> <a class="nav-link" href="accounts.php">Accounts</a></li>
        <li class="nav-item "> <a class="nav-link" href="statements.php"> Details</a></li>
        <li class="nav-item "> <a class="nav-link" href="https://vtu.ac.in/en/" target="_blank">Apply For Exam</a></li>
        <li class="nav-item "> <a class="nav-link" href="resources.php" target="_blanck">Resources</a></li>
        <li class="nav-item active"> <a class="nav-link" href="request.php">Request for certificates</a></li>


      </ul>
      <?php include 'sideButton.php'; ?>

    </div>
  </nav><br><br><br>
  <form action="" method="post">

    <div class="column">



      <div class="container">

      <?php



    if(isset($_POST['submit'])) {



    $usn = $_POST['usn'];

    $name = $_POST['name'];

    $sem = $_POST['semester'];

    $branch = $_POST['branch'];

    $cname = $_POST['cname'];

    $descreption = $_POST['descreption'];

    $city = $_POST['city'];




    $sql = "INSERT INTO request  VALUES ('$usn',

            '$name','$sem','$branch','$cname','$descreption','$city')";



    if(mysqli_query($con, $sql)) {

        echo '<script>alert("Request sent!")</script>';

    } else {
      echo "Error in requesting data";
      echo "Please check all the fields";
    }



}    



?>

        <div class="form-group col-lg-6">

          <label for="usn" style="color: white;">USN</label>

          <input type="text" class="form-control" id="usn" name="usn" aria-describedby="emailHelp" placeholder="Enter usn" required>

        </div>



        <div class="form-group col-lg-6">

          <label for="name" style="color: white;">Name</label>

          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>

        </div>



        <div class="form-group col-lg-6">

          <label for="semester" style="color: white;">Semester</label>

          <input type="text" class="form-control" id="semester" name="semester" placeholder="Enter sem" required>

        </div>
        <div class="form-group col-lg-6">

          <label for="branch" style="color: white;">Branch</label>

          <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter branch" required>

        </div>


        <div class="form-group col-lg-6">

          <label for="branch" style="color: white;">Certificate required</label>

          <input type="text" class="form-control" id="branch" name="cname" placeholder="Enter branch" required>

        </div>


        <div class="form-group col-lg-6">

          <label for="branch" style="color: white;">Need for certificate</label>

          <input type="text" class="form-control" id="branch" name="descreption" placeholder="Enter need for certificate" required>

        </div>

        





        <div class="form-group col-lg-6">

          <label for="city" style="color: white;">City</label>

          <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>

          <br />

          <button type="submit" class="btn btn-primary " name='submit' style="background-color: black;">Submit</button>

        </div>




      </div>



    </div>
    </div>


  </form>
  
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  
</body>

</html>