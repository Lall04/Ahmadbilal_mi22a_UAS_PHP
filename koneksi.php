<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<?php

    $host       = "localhost"; // 127.0.0.1
    $user       = "root";
    $password   = "";
    $dbname     = "db_uasahmadbilal";

    $koneksi = mysqli_connect($host, $user, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Koneksi Gagal karena : ". mysqli_connect_error());
    }

?>