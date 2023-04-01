<?php

session_start();


include 'koneksi.php';

$username 				= $_POST['username'];
$password 		    = $_POST['password'];



$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  $_SESSION['username'] = $row["username"];
  header('Location: http://localhost/sekolah/data.php');

} else {
   header('Location: http://localhost/sekolah/index.php');
}





?>