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
    
    $sql = "DELETE FROM kategori WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "kategori berhasil dihapus";
        header('location: kategori.php');
    } else {
        $_SESSION['error'] = "kategori gagal dihapus";
        header('location: kategori.php');
    }

?>