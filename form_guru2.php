<!DOCTYPE html>
<html>


<body>
 <?php
 include 'session.php';
 ?>
<h2>Form Data Guru</h2>

<form action="simpan_form_guru.php" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value=""><br><br>

  <label for="no_hp">No HP:</label><br>
  <input type="text" id="no_hp" name="no_hp" value=""><br><br>

   <label for="alamat">Alamat:</label><br>
  <textarea id="alamat" name="alamat" rows="5"></textarea><br><br>

  <label for="mata_pelajaran">Mata Pelajaran:</label><br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Bahasa Indonesia"> Bahasa Indonesia <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Bahasa Inggris"> Bahasa Inggris <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="IPA"> IPA <br>
  <input type="radio" id="mata_pelajaran" name="mata_pelajaran" value="Matematika"> Matematika <br><br>

   <label for="foto">Foto:</label><br>
  <input type="file" id="foto" name="foto" value=""><br><br>

  <input type="submit" value="Submit" name="submit">
</form> 



</body>
</html>