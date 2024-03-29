<!DOCTYPE html>
<html lang="en">
<head>
<title>Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>


 <?php
include 'koneksi.php';
include 'session.php';

$id         = $_GET['id'];
$sql        = "SELECT * FROM guru WHERE id = '$id'";
$result     = $conn->query($sql);
$row        = $result->fetch_assoc();
?>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
  </div>
  <div class="w3-bar-block">
    <a href="http://localhost/sekolah/data.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="http://localhost/sekolah/siswa.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Siswa</a> 
    <a href="http://localhost/sekolah/guru.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Guru</a> 
    <a href="http://localhost/sekolah/karyawan.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Karyawan</a> 

   <a href="http://localhost/sekolah/log_out.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Edit Data Guru</b></h1>

  </div>
  


  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <hr style="width:50px;border:5px solid red" class="w3-round">
    

<form action="update_form_guru.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>

  <label for="no_hp">No HP:</label><br>
  <input type="text" id="no_hp" name="no_hp" value="<?php echo $row["no_hp"]; ?>"><br><br>

  <label for="alamat">Alamat:</label><br>
  <textarea id="alamat" name="alamat" rows="5">  <?php echo $row["alamat"]; ?>   </textarea><br><br>

  <label for="mata_pelajaran">Mata Pelajaran:</label><br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Bahasa Indonesia" <?php echo ($row["mata_pelajaran"] == 'Bahasa Indonesia') ? 'checked' : '';?> > Bahasa Indonesia <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Bahasa Inggris" <?php echo ($row["mata_pelajaran"] == 'Bahasa Inggris') ? 'checked' : '';?> > Bahasa Inggris <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="IPA" <?php echo ($row["mata_pelajaran"] == 'IPA') ? 'checked' : '';?> > IPA <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Matematika" <?php echo ($row["mata_pelajaran"] == 'Matematika') ? 'checked' : '';?> > Matematika <br><br>

  <label for="foto">Foto:</label><br>
  <img src="foto/<?php echo $row["foto"]; ?>" style="height: 100px ; width: auto">
  <input type="file" id="foto" name="foto" value=""><br><br>

 <input  class="btn btn-success btn-sm" type="submit" value="Submit" name="submit">
</form>


  
  


<!-- End page content -->
</div>




</body>
</html>




