<?php
include 'koneksi.php';

$id 				= $_GET['id'];

$sql = "DELETE FROM karyawan WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/sekolah/karyawan.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>