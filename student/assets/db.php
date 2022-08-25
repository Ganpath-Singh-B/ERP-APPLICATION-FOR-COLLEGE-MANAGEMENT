<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'mybank';


    $con = mysqli_connect($serverName, $userName, $password);


    if(mysqli_connect_error()) {
        echo "connection failed";
        exit();
    
    } else {
      mysqli_select_db($con, $dbName);
    }


    define('bankName', 'MCB Bank');
    $ar = $con->query("select * from userAccounts where id = '$_SESSION[userId]'");
    $userData = $ar->fetch_assoc();

    $ar1 = $con->query("select * from attendance where id = '$_SESSION[userId]'");
    $userData1 = $ar1->fetch_assoc(); 

//    $ar2 = $con->query("select * from resources where id = '$_SESSION[userId]'");
//    $userData2 = $ar2->fetch_assoc();

    $query = mysqli_query($con, "select * from resources where id = '$_SESSION[userId]'");

    $numrows = mysqli_num_rows($query);


?>

<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>