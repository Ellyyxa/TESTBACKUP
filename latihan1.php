<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP DAN HTML</title>
</head>
<body>
   <br> ini adalah bahagian HTML</br>
   <?php echo " ini ialah bahagian PHP" ;?>

</body>
</html>
<br>
<?php
 $nama = "ali";
 $umur = 12;

 echo " nama saya ialah ";
 echo $nama;
 echo " dan saya berumur ";
 echo $umur;

 //pemalar

 $panjang = 10;
 $lebar = 5;

 define('pi', 3.142);//pemalar pi

 //kira luas segitiga
 echo "<br>";
 echo "Luas Segitiga:";
 echo pi*$panjang*$lebar;
 echo "<br>";

 //operator aritmetik

 //integer
 $num1 = 12;
 $num2 = 6;
 //float
 $num3 = 5.3;

 //operasi dua nombor
 echo "Hasil operasi $num1 + $num2 =";
 echo $num1 + $num2;
 echo "<br>";
 echo "Hasil operasi $num1  - $num2 =";
 echo $num1 - $num2;
 echo "<br>";
 echo "Hasil operasi $num1 * $num2 =";
 echo $num1 * $num2;
 echo "<br>";
 echo "Hasil operasi $num1 / $num2 =";
 echo $num1 / $num2;
 echo "<br>";
 echo "Hasil operasi $num1 + $num3 =";
 echo $num1 + $num3;
 echo "<br>";