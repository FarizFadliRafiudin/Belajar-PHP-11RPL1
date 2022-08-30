<?php
// Variable
// $1nama; contoh salah(karena di awali angka)
// $#nama; contoh salah(ada simbol di tengah)
// 1nama; contoh salah(tidak ada simbol di awal)
$nama = "Fariz";
$usia = 17;
echo "Nama saya $nama <br>";
echo "Usia saya $usia tahun <br>";
// boolean,array
//tipde data (integer,float,string)
$namalengkap = "Fariz Fadli"; //string
$umur = 17;//Integer
$nilai = 90.5;//Float
$jomblo = TRUE;//Boolean(TRUE/FALSE)
//Array string
$namarpl1 = array("Alya", "Dwi", "Eben");

echo "Nama lengkap : $namalengkap <br>";
echo "Umur : $umur <br>";
echo "Nilai : $nilai <br>";
echo "Jomblo : $jomblo <br>";
echo "<hr>";
echo "Array0 : $namarpl1[0]<br>";//Alya
echo "Array1 : $namarpl1[1]<br>";//Dwi
echo "Array2 : $namarpl1[2]<br>";//Eben
echo "<hr>";

//aritmatika(+-/*%)
echo"angka1:" .$angka1 = 10; echo "<br>";
echo"angka2:" .$angka2 = 5; echo "<hr>";

echo "tambah ;" .$tambah = $angka1 + $angka2 . "<br>";
echo "kurang ;" .$kurang = $angka1 - $angka2 . "<br>";
echo "bagi ;" .$bagi = $angka1 / $angka2 . "<br>";
echo "kali ;" .$kali =  $angka1 * $angka2 . "<br>";
echo "sisa bagi;" .$sisabagi =  $angka1 % $angka2 . "<br>";
echo "<hr>";
//operator pertandingan (>,<,!=,==,===)
//return TRUE(1), FALSE(NULL)
$a = 10;
$b = 5;
$c = "10";
echo "== :"; echo $a == $b; echo "<br>"; 
echo "> :"; echo $a > $b; echo "<br>";
echo "< :"; echo $a < $b; echo "<br>";
echo "!= :"; echo $a != $b; echo "<br>";
echo "=== :"; echo $a === $b; echo "<br>";
echo "<hr>";
//operator logika (AND, OR, &&, ||)
//IF 

$x = 10;
$y = 20;

if($x == 10 AND $y == 20){echo "Terpenuhi 2 variable <hr>";}
if($x == 10 OR $y == 10){echo "salah satu variable terpenuhi <hr>";}
?>