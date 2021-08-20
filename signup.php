<?php

include('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$query = $con->prepare("INSERT INTO registerform(email, password) VALUES(?,?)");  // prevents mysqli injection
$query->bind_param('ss', $email, $password);
$query->execute();
echo "registered successfully";
$query->close();
$con->close();

?>
