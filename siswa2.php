<!DOCTYPE html>

<html>

<head>

<title>Data Siswa</title>

</head>


<link rel="stylesheet" href="bootstrap.min.css">


<body>

<?php
include 'koneksi.php';
include 'session.php';
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);




?>

<button style="width: 100%"><a style="font-size: medium" href="http://localhost/sekolah/form_siswa.php">Tambah</a></button><br>

<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>NO</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>VEGETARIAN</th>
		<th>NIS</th>
		<th>TEMPAT LAHIR</th>
		<th>TANGGAL LAHIR</th>
		<th>ALAMAT</th>
		<th>KELAS</th>
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
		<td><?php echo $row["jenis_kelamin"]; ?></td>
		<td><?php echo $row["vegetarian"]; ?></td>
		<td><?php echo $row["nis"]; ?></td>
		<td><?php echo $row["tempat_lahir"]; ?></td>
		<td><?php echo date('jS F Y', strtotime($row['tanggal_lahir'])); ?></td>
		<td><?php echo $row["alamat"]; ?></td>
		<td><?php echo $row["kelas"]; ?></td>
		<td><img src="foto/<?php echo $row["foto"]; ?>" style="height: 100px ; width: auto"></td>

		
		<td><button><a href="http://localhost/sekolah/delete_siswa.php?id=<?php echo $row['id']; ?>">Hapus</a></button><br>
		<button><a href="http://localhost/sekolah/edit_form_siswa.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
	</tr>
	
	<?php 
		}
	?>

</table>

</body>

</html>
