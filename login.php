<?php

include('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

// mysqli injection prevention
$email = stripcslashes($email);                                 // removes backslashes
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);               // removes special characters          
$password = mysqli_real_escape_string($con, $password);

$query = "select *from registerform where email = '$email' and password = '$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    echo "login successful";
}else{
    echo "login failed. invalid email or password";
}

?>
