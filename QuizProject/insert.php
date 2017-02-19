<?php
 $con=mysqli_connect("localhost","root","","registration");
 // Check connection
 if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 // escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
 $email = mysqli_real_escape_string($con, $_POST['email']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);

$sql="INSERT INTO details (name, email, username, password, phone)
VALUES ('$name', '$email', '$username', '$password', '$phone')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "registration successful.. start learning now";

mysqli_close($con);
 ?>