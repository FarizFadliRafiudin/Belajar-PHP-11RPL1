<form action="rumus-persegi.php" method="POST">
    <h1>Rumus Luas dan Keliling Persegi</h1>
    <p>sisi :</p>
    <input type="number" name="sisi" placeholder="Ex.5">
    <input type="submit" name="proses" value="hitung luas & kelilinng">
</form>

<?php
    if ( isset($_POST["proses"]) ){
        echo "<hr>";
        $sisi = $_POST["sisi"];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        echo "sisi = $sisi <br> ";
        echo "Luas = $luas <br>";
        echo "Keliling = $keliling <br>";
    }
    echo "<hr>";
?>