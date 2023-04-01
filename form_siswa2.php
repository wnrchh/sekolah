<!DOCTYPE html>
<html>
<body>

<h2>Form Data Siswa</h2>


<?php
include 'session.php';
?>

<form action="simpan_form_siswa.php" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L"> LAKI-LAKI <br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P"> PEREMPUAN<br><br>

  <label for="vegetarian">Vegetarian:</label><br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Iya"> Iya <br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Tidak"> Tidak <br><br>

  <label for="nis">NIS:</label><br>
  <input type="text" id="nis" name="nis" value=""><br><br>

   <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" value=""><br><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" value=""><br><br>

  <label for="alamat">Alamat:</label><br>
<textarea id="alamat" name="alamat" rows="5">    </textarea><br><br>

  <label for="kelas">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas" value=""><br><br>

  <label for="foto">Foto:</label><br>
  <input type="file" id="foto" name="foto" value=""><br><br>


  <input type="submit" value="Submit" name="submit">
</form> 



</body>
</html>