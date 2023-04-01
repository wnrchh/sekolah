<?php
include 'koneksi.php';

$nama 				= $_POST['nama'];
$no_hp 				= $_POST['no_hp'];
$alamat 			= $_POST['alamat'];
$mata_pelajaran		= $_POST['mata_pelajaran'];

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




$sql = "INSERT INTO `guru` (`id`, `nama`, `no_hp`, `alamat`, `mata_pelajaran` , `foto`) VALUES (NULL, '$nama' , '$no_hp' , '$alamat' , '$mata_pelajaran' , '$foto')";


if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/sekolah/guru.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}





?>