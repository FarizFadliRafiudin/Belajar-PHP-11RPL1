<form action="rumus-kerucut.php" method="POST">
    <h1>Rumus luas permukaan dan volume kerucut</h1>
    <p>jari-jari, tinggi, dan selimut</p>
    <input type="number" name="jari-jari" placeholder="r"><br>
    <input type="number" name="tinggi" placeholder="t"><br>
    <input type="number" name="selimut" placeholder="s"><br>
    <input type="submit" name="proses" value="hitung luas permukaan dan volume">
</form>

<?php
    if(isset ($_POST["proses"])){
        echo "<hr>";
        $jari_jari = $_POST["jari-jari"];
        $tinggi = $_POST["tinggi"];
        $selimut = $_POST["selimut"];
        $luas_alas = 22/7 * $jari_jari * $jari_jari;
        $selimut = 22/7 * $jari_jari + $selimut;
        $volume = 1/3 * $luas_alas * $tinggi;

        echo "luas alas = $luas_alas cm <br>";
        echo "luas selimut = $selimut cm <br>";
        echo "volume kerucut = $volume cm <br>";
    }
?>