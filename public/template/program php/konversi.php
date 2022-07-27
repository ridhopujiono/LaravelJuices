<html>
<head>
	<title>ST. FAIZUMMASRUROH</title>
</head>
<body>
	<h1 align="center">Program PHP</h1>
	<h4><a href="kalkulator.php">Kalkulator</a>   <a href="koversi.html">Konversi</a>   <a href="tabel.php">Tabel</a></h4>
	<form action="Konversi.php" method="post">
        Bilangan Angka = <input type="text" name="agka"><br>
        <input type="submit" name="conv" value="Konversi">
    </form>

    <?php
            function terbilang($n){
                $huruf = [""," satu "," dua "," tiga "," empat "," lima "," enam "," tujuh "," delapan "," sembilan "," sepuluh "," sebelas "];
                if ($n <12) {return $huruf[$n];}
                else if ($n < 20) {return terbilang($n-10)."belas";}
                else if ($n < 100) {return terbilang($n/10)."puluh".terbilang($n%10);}
            }
            if (isset($_POST['conv'])){
                echo '<input type="text" value="'.terbilang($_POST['agka']).'">';
            }
    ?>
</body>
</html>