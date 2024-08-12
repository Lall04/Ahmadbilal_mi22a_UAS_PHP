<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<?php
    session_start();

    $id = $_GET['id'];

    include 'koneksi.php';
    
    $sql = "DELETE FROM produk WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "produk berhasil dihapus";
        header('location: produk.php');
    } else {
        $_SESSION['error'] = "produk gagal dihapus";
        header('location: produk.php');
    }

?>