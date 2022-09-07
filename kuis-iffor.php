<?php
    //Nama : Fariz Fadli Rafiudin
    //Kelas : 11 RPL 1


echo "nomor 1 <br>";
$star=10;
         for( $a=$star;$a>0;$a--){
             for($i=1; $i<=$a; $i++){
                echo "&nbsp";
         }
         for($a1=$star;$a1>=$a;$a1--){
           echo"*";
         }
           echo"<br>";
      }
      echo "<hr>";
      echo "nomor 2 <br>";
      $star=10;
           for($a=$star;$a>0;$a--){
                for($b=$star;$b>=$a;$b--){
                     echo "*";
                 }
              echo "<br>";
          }
      echo "<hr>";
      echo "nomor 3 <br>";
$star=10;
         for($a=$star;$a>0;$a--){
                for($i=1; $i<=$a; $i++){
                    echo " &nbsp";
                }
                for($a1=$star;$a1>=$a;$a1--){
                    echo"*";
                }
            echo"<br>";
       }
echo "<hr>";
echo "nomor 4 <br>";
$star=10;
for($a=1; $a<=$star; $a++){
      for($b=1; $b<=$a; $b++){
           echo "&nbsp";
 }
      for($c=$star; $c>=$a; $c-=1){
            echo "*";
    }
    echo "<br>";
}
echo "nomor 5 <br>";
$star=10;
     for($a=1; $a<=$star; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$star; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }
echo "<hr>";
echo "nomor 6 <br>";
$star=10;
  for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
               echo "*";
        }
         echo "<br>";
   }
   echo "<hr>";
   echo "nomor 7 <br>";
$star=10;
    for($a=1; $a<=$star; $a++){
          for($b=$star; $b>=$a; $b-=1){
                 echo "&nbsp";
          }
          for($c=1; $c<=$a; $c++){
                 echo "*";
          }
                echo "<br>";
                }
                for($a=1; $a<=$star; $a++){
                for($b=1; $b<=$a; $b++){
                     echo "&nbsp";
                }
                for($c=$star; $c>=$a; $c-=1){
                     echo "*";
                }
         echo "<br>";
   }
echo "<hr>";
echo "Nomor 8 <br>";
   for ($i=1;$i<=5;$i++){
    for ($j=$i;$j>=1;$j--){
        echo $j;
    }
    echo "<br>";
}
echo "<hr>";
echo "nomor 9 <br>";
    for ($x = 5; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo $y;
            
        }
        echo "<br>";
    }
echo "<hr>";

echo "Nomor 14 <br>";
$h = 9;
$a = 0;
for($i=0;$i<$h;$i++){
    for($j=$h;$j>$a;$j--){
        echo "&nbsp;";
    }
    for($k=0;$k<=$a;$k++){
        if($i==(int)($h/2)){
            echo "+&nbsp;";
        }else{
            if($k==0 || $k==$a || $k==(int)($a/2)){
                echo "+&nbsp;";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
    }
    if($i<4){
        $a+=2;
    }else{
        $a-=2;
    }
    echo "<br>";
}
echo "<hr>";

?>