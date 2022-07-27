<html>
<head>
	<title>ST. FAIZUMMASRUROH</title>
</head>
<body>
	<table border="1" align="center">
        <h1 align="center">Program PHP</h1>
	<h4><a href="kalkulator.php">Kalkulator</a>   <a href="konversi.php">Konversi</a>   <a href="tabel.php">Tabel</a></h4>
        </tr>
        <tr>
            <td colspan="5">
                <table align="center">
                <table border="1">
	<?php
		for ($b=1; $b<=5; $b++){
                echo "<tr>";
                for($c=1; $c<=5; $c++){
                    echo "<td>";
                    echo $b.$c;
                    echo "</td>";
                }
            }
        ?>
</body>
</html>