<?php
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$tgl = $_POST['tanggal'];
	$pilbarang = $_POST['barang'];
	$email = $_POST['email'];
	$tel = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
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
<input type="radio" name="jk" value="laki-laki">Laki-laki
<input type="radio" name="jk" value="perempuan">Perempuan
</p>
<p>
<label>Tanggal Lahir :</label>
<input type="date" name="tanggal">
</p>
<p>
<label>Pilihan Barang :</label>
<select name="barang">
<option value="elektronik">Elektronik</option>
<option value="makanan">Makanan</option>
<option value="kesehatan">Kesehatan</option>
<option value="lain">Lainnya></option>
</select>
</p>
<p>
<label>Email :</label>
<input type="email" name="email" placeholder="email">
</p>
<p>
<label>Telepon :</label>
<input type="tel" name="telepon" pattern="\d\d\d\d-\d\d\d\d-\d\d\d\d" placeholder="9999-9999-9999" required>
</p>
<p>
<p>Alamat :</p>
<textarea name="alamat"cols="50" rows="3"></textarea>
</p>
<fieldset>
<legend>DATA LOGIN</legend>
<p>
<label>Username :</label>
<input type="text" name="username" placeholder="username">
</p>
<p>
<label>Password :</label>
<input type="text" name="password" placeholder="password" pattern="[a-zA-Z][a-zA-Z0-9].{8,}" title=" Minimal 8 karakter, harus berisi angka dan huruf" required>
</p>
</fieldset>
<p>
<input type="submit" name="submit" value="Daftar">
</p>
</fieldset>
</form>
</body>
</html>

