<?php
    include('./input-config.php');
    echo "<a href='input-datadiri-tambah.php'>Tambah Data</a>";
    echo "<hr>";
    // Menampilkan data dari database
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysqli, "SELECT * FROM datadiri ");
    while ($row = mysqli_fetch_array($data)){
        $tabledata .= "
            <tr>
             <td>".$row["nis"]."</td>
             <td>".$row["namalengkap"]."</td>
             <td>".$row["tanggal_lahir"]."</td>
             <td>".$row["nilai"]."</td>
             <td>
                <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>Edit</a>
                &nbsp; -&nbsp;
                <a href= 'input-datadiri-hapus.php?nis=".$row["nis"]."'
                onclick='return confirm(\"Certo Eliminare ?\");'>Hapus</a>
             </td>
            </tr> 
        ";
        $no++;
    }

    echo "
          <table cellpadding=5 border=1 cellspacing=0>
                <tr>
                   <th>NIS</th> 
                   <th>Nome</th> 
                   <th>Data Di Nascita</th> 
                   <th>Punto</th> 
                   <th>Azione</th>
                </tr>
                $tabledata
          </table>
    ";
?>