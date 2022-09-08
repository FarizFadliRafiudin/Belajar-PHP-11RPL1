<form action="rumus-segitiga.php" method="POST">
    <h1>Rumus luas dan keliling segitiga</h1>
    <p>Alas, Tinggi, dan Sisi</p>
    <input type="number" name="alas" placeholder="a" /> <br>
    <input type="number" name="tinggi" placeholder="t" /> <br>
    <input type="number" name="sisi" placeholder="s" /> <br>
    <input type="submit" name="proses" value="hitung luas dan keliling segitiga">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $alas = $_POST["alas"];
        $tinggi = $_POST["tinggi"];
        $sisi = $_POST["sisi"];
        $luas = 1/2 * $alas * $tinggi;
        $keliling = $sisi + $sisi + $sisi;
        
        echo "alas = $alas <br>";
        echo "tinggi = $tinggi <br>";
        echo "sisi = $sisi <br>";
        echo "luas segitiga = $luas <br>";
        echo "keliling segitiga = $keliling <br>";
    }
?>