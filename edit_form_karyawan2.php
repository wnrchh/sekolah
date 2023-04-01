<!DOCTYPE html>
<html>
<body>

<h2>Edit Data Karyawan</h2>


<?php
include 'koneksi.php';
include 'session.php';

$id 				= $_GET['id'];
$sql 				= "SELECT * FROM karyawan WHERE id = '$id'";
$result 		= $conn->query($sql);
$row 				= $result->fetch_assoc();
?>

<form action="update_form_karyawan.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>

  <label for="no_hp">No HP:</label><br>
  <input type="text" id="no_hp" name="no_hp" value="<?php echo $row["no_hp"]; ?>"><br><br>

  <label for="alamat">Alamat:</label><br>
  <textarea id="alamat" name="alamat" rows="5">  <?php echo $row["alamat"]; ?>   </textarea><br><br>

  <label for="pekerjaan">Pekerjaan:</label><br>
  <input type="text" id="pekerjaan" name="pekerjaan" value="<?php echo $row["pekerjaan"]; ?>"><br><br>

  <label for="foto">Foto:</label><br>
  <img src="foto/<?php echo $row["foto"]; ?>" style="height: 100px ; width: auto">
  <input type="file" id="foto" name="foto" value=""><br><br>



  <input type="submit" value="Submit" name="submit">
</form>  


</body>
</html>


