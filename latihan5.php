<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>latihan 5</title>
</head>
<body>
	<h3>Memaparkan gred bagi markah yang diperolehi oleh pelajar</h3>
	<br>

	<form>
		<label>Masukkan markah anda :<input type="text" name="markah"></label>
		<button type="submit">Kira</button>
	</form>

	<?php
	$markah = ($_GET["markah"] ?? 0);
	$A = 80;
	$B = 65;
	$C = 50;
	$D = 40;
	$E = 0;
	echo "Mesej untuk anda : ";

	if ($markah >= $A ) {
		// code...
		echo "A";
	}elseif ($markah >= $B) {
		// code...
		echo "B";
	}elseif ($markah >= $C) {
		// code...
		echo "C";
	}elseif ($markah >= $D) {
		// code...
		echo "D";
	}elseif ($markah >= $E) {
		// code...
		echo "E";
	}
	?>
</body>
</html>