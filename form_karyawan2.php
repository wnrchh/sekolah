<!DOCTYPE html>
<html>
<body>

<h2>Form Data Karyawan</h2>

<?php
include 'session.php';
?>

<form action="simpan_form_karyawan.php" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br><br>

  <label for="no_hp">No HP:</label><br>
  <input type="text" id="no_hp" name="no_hp" value=""><br><br>

  <label for="alamat">Alamat:</label><br>
  <textarea id="alamat" name="alamat" rows="5"></textarea><br><br>

  <label for="pekerjaan">Pekerjaan:</label><br>
  <input type="text" id="pekerjaan" name="pekerjaan" value=""><br><br>

  <label for="foto">Foto:</label><br>
  <input type="file" id="foto" name="foto" value=""><br><br>

  <input type="submit" value="Submit">
</form> 



</body>
</html>