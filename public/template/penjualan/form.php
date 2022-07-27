<?php
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tgl = $_POST['tanggal'];
	$pilbarang = $_POST['barang'];
	$email = $_POST['email'];
	$tel = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
?>
<html>
<head>
<title>ST</title>
</head>
<body>
	<h1 align="center">STore</h1>
	<h4><a href="daftar.html">Daftar</a>   <a href="beranda.html">Beranda</a>   <a href="elektronik.html">Elektronik</a>   <a href="makanan.html">Makanan</a>   <a href="kesehatan.html">Kesehatan</a></h4>
<hr>
<form action="form.php" method="POST">
<fieldset>
<legend align="center"><h3> FORM PENDAFTARAN </h3></legend>
<label>Nama :</label>
<td> <?php echo $nama ?> </td>
</p>
<p>
<label>Jenis Kelamin :</label>
<td> <?php echo $jk ?> </td>
</p>
<p>
<label>Tanggal Lahir :</label>
<td> <?php echo $tgl ?> </td>
</p>
<p>
<label>Pilihan Barang :</label>
<td> <?php echo $pilbarang ?> </td>
</select>
</p>
<p>
<label>Email :</label>
<td> <?php echo $email ?> </td>
</p>
<p>
<label>Telepon :</label>
<td> <?php echo $tel ?> </td>
</p>
<p>
<p>Alamat :</p>
<td> <?php echo $alamat ?> </td>
</p>
<fieldset>
<legend>DATA LOGIN</legend>
<p>
<label>Username :</label>
<td> <?php echo $username ?> </td>
</p>
<p>
<label>Password :</label>
<td> <?php echo $password ?> </td>
</p>
</fieldset>
</fieldset>
</form>
</body>
</html>

