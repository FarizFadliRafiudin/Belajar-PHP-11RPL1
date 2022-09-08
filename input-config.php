<?php
    $mysqli = new mysqli("localhost", "root", "", "siswa_rpl");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>