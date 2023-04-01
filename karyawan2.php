<!DOCTYPE html>

<html>

<head>

<title>Data Karyawan</title>

</head>


<link rel="stylesheet" href="bootstrap.min.css">


<body>

<?php
include 'koneksi.php';
include 'session.php';

$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);




?>

<button style="width: 100%"><a style="font-size: medium" href="http://localhost/sekolah/form_karyawan.php">Tambah</a></button><br>

<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>NO</th>
		<th>NAMA</th>
		<th>NO HP</th>
		<th>ALAMAT</th>
		<th>PEKERJAAN</th>
		<th>FOTO</th>
		<th>AKSI</th>
	</tr>
<?php

  // output data of each row
$no=0;
  while($row = $result->fetch_assoc()) {
   $no++;
 
?>

	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["no_hp"]; ?></td>
		<td><?php echo $row["alamat"]; ?></td>
		<td><img src="foto/<?php echo $row["foto"]; ?>" style="height: 100px ; width: auto"></td>
		<td><?php echo $row["pekerjaan"]; ?></td>
		
		
		<td><button><a href="http://localhost/sekolah/delete_karyawan.php?id=<?php echo $row['id']; ?>">Hapus</a></button><br>
		<button><a href="http://localhost/sekolah/edit_form_karyawan.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
	</tr>
	
	<?php 
		}
	?>

</table>

</body>

</html>