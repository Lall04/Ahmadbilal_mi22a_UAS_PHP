<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<?php 
    if (!isset($_SESSION['user'])) {
        header('location: login.php');
    }
?>