<html>
<head>
	<title>ST. FAIZUMMASRUROH</title>
</head>
<body>
	<h1 align="center">Program PHP</h1>
	<h4><a href="kalkulator.php">Kalkulator</a>   <a href="konversi.php">Konversi</a>   <a href="tabel.php">Tabel</a></h4>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="kalkulator.php">
			<p>
			<label>BILANGAN 1 :</label>
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="masukkan bilangan">
			</p>
			<p>
			<label>BILANGAN 2 :</label>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="masukkan bilangan">
			</p>
			<label>HITUNG :</label>
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			</p>
		<?php if(isset($_POST['hitung'])){ ?>
			<label>HASIL :</label>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<label>HASIL :</label>
			<input type="text" value="0" class="bil">
		<?php } ?>
		<input type="submit" name="hitung" value="Hitung" class="tombol">
		</form>
	</div>
</body>
</html>