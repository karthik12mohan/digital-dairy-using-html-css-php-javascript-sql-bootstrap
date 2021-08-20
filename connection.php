<?php

// database connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'quadb');

// check connection
if($con->connect_error){
    die('connection failed:' .$con->connect_error);
}

?>
