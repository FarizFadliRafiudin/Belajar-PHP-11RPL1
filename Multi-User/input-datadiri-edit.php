<?php
    if(isset($_GET['nis'])){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis;'";
        include ('./input-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input value="<?php echo $row["nis"];?>" readonly type="number" name="nis" placeholder="Ex.12001142"><br>

    <label for="nama">Nama lengkap :</label><br>
    <input value="<?php echo $row["namalengkap"];?>" type="text" name="nama" placeholder="Ex.Firdaus"><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input value="<?php echo $row["tanggal_lahir"];?>" type="date" name="tanggal_lahir"><br>

    <label for="nilai">Nilai :</label><br>
    <input value="<?php echo $row["nilai"];?>" type="number" name="nilai" placeholder="Ex. 80.56"><br>

    <input type="submit" name="simpan" value="simpan data"><br>
    <a href="input-datadiri.php">Kembali</a>
</form>

<?php
    if(isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];

        //EDIT - memperbarui data
        $query = "
            UPDATE datadiri SET namalengkap = '$nama',
            tanggal_lahir = '$tanggal_lahir',
            nilai = '$nilai'
            WHERE nis = '$nis';
        ";

        include ('./input-config.php');
        $update = mysqli_query($mysqli, $query);

        if($update){
            echo "
                <script>
                    alert('Dati aggiornati correttamente');
                    window.location='input-datadiri.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Dati el failure');
                    window.location='input-datadiri-edit.php?nis=$nis';
                </script>
            ";
        }
    }
?>