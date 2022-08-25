<?php 
			$con = new mysqli('localhost:3307','root','','mybank');
    define('bankName', 'MCB Bank');
    $ar = $con->query("select * from attendance where id = '$_SESSION[userId]');
    $userData1 = $ar->fetch_assoc();
		?>