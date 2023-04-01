<?php
include 'koneksi.php';

$id 				= $_GET['id'];

$sql = "DELETE FROM siswa WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/sekolah/siswa.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>