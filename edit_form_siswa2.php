<!DOCTYPE html>
<html>
<body>

<h2>Edit Data Siswa</h2>


<?php
include 'koneksi.php';
include 'session.php';

$id 				= $_GET['id'];
$sql 				= "SELECT * FROM siswa WHERE id = '$id'";
$result 		= $conn->query($sql);
$row 				= $result->fetch_assoc();
?>

<form action="update_form_siswa.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" <?php echo ($row["jenis_kelamin"] == 'L') ? 'checked' : '';?> > LAKI-LAKI <br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P" <?php echo ($row["jenis_kelamin"] == 'P') ? 'checked' : '';?>> PEREMPUAN<br><br>

  <label for="vegetarian">Vegetarian:</label><br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Iya" <?php echo ($row["vegetarian"] == 'Iya') ? 'checked' : '';?> > Iya <br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Tidak" <?php echo ($row["vegetarian"] == 'Tidak') ? 'checked' : '';?>> Tidak <br><br>

  <label for="nis">NIS:</label><br>
  <input type="text" id="nis" name="nis" value="<?php echo $row["nis"]; ?>"><br><br>

  <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo $row["tempat_lahir"]; ?>"><br><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $row["tanggal_lahir"]; ?>"><br><br>


  <label for="alamat">Alamat:</label><br>
<textarea id="alamat" name="alamat" rows="5">  <?php echo $row["alamat"]; ?>   </textarea><br><br>


  <label for="kelas">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas" value="<?php echo $row["kelas"]; ?>"><br><br>

  <label for="foto">Foto:</label><br>
  <img src="foto/<?php echo $row["foto"]; ?>" style="height: 100px ; width: auto">
  <input type="file" id="foto" name="foto" value=""><br><br>

  <input type="submit" value="Submit" name="submit">
</form> 


</body>
</html>