<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"phpproject");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";

mysqli_query($connection,$query);


// Display the alert box
echo '<script>alert("Welcome to our website")</script>';

?>
