<?php
//Materi Percabaangan(IF ELSE)
    $nilai = 78;
    echo "nilai kamu adalah $nilai <br>";
    echo "maka status kamu =";
    if ($nilai > 78) {
        echo "Lulus";
    } else if($nilai == 78){
        echo "Lulus KKM";
    }
     else{
        echo " Tidak lulus";
    }
    echo "<hr>";

    $nilai_web = 82;
    $nilai_pbo = 77;
    echo "Nilai WEB kamu = $nilai_web <br>";
    echo "Nilai PBO kamu = $nilai_pbo <br>";
    echo "Kelulusan kamu = ";
    if ($nilai_web >= 80 AND $nilai_pbo >=80){
        echo " Lulus 2 Mapel Produktif";
    } else if ($nilai_web >= 80 or $nilai_pbo >= 80) {
        if ($nilai_web >= 80 ){
            echo "lulus mapel WEB <br>";
        } 
        if ($nilai_pbo >= 80 ){
            echo " lulus mapel PBO ";
        }
        echo "lulus mapel produktif";
    }
    echo "<hr>";
    // Materi Perulangan (while, do while, for)
    $i = 1;
    while ($i <= 5){
        echo "Hello world  ! ke - $i <br>";
        $i++;  //Assigment +1
    }
    echo "<hr>";
    $j = 1;
    do {
        echo $j . "<br>";
        $j++;
    }while($j <= 5);
    echo "<hr>";

    for($k = 10; $k >= 1; $k--){
        echo $k . "<br>";
    }
    echo "<hr>";
    for($x = 10; $x >= 1; $x--){
        for($y = 1; $y <= $x; $y++){
            echo $y;
        }
        echo "<br>";    
    }
    echo "<hr>";
    for($z = 1; $z <= 10; $z++){
        if ($z % 2 == 0){
            echo $z . "- genap <br>";
        } else{
            echo $z . "- ganjil <br>";
        }
    }
?>