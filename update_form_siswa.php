<?php
include 'koneksi.php';

$id 				          = $_GET['id'];
$nama 				        = $_POST['nama'];
$jenis_kelamin 		    = $_POST['jenis_kelamin'];
$vegetarian 	       	= $_POST['vegetarian'];
$nis 				          = $_POST['nis'];
$tempat_lahir 	     	= $_POST['tempat_lahir'];
$tanggal_lahir	     	= $_POST['tanggal_lahir'];
$alamat 		        	= $_POST['alamat'];
$kelas 			        	= $_POST['kelas'];


$target_dir = "foto/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$foto = basename($_FILES["foto"]["name"]);
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
     move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


$sql = "UPDATE `siswa` SET  nama 				= '$nama',
							jenis_kelamin 		= '$jenis_kelamin',
							vegetarian 			= '$vegetarian',
							nis 				= '$nis',
							tempat_lahir		= '$tempat_lahir',
							tanggal_lahir		= '$tanggal_lahir',
							alamat 				= '$alamat',
							kelas 				= '$kelas',
							foto 				= '$foto'
						
		WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/sekolah/siswa.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>