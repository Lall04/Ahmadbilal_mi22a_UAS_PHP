<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<?php 
    session_start();
    include 'session.php';
?>

<form action="" method="post">
    
    <h2>edit produk</h2>

    kode produk<br>
    <input type="text" name="id" id="id">

    <br><br>

    nama produk<br>
    <input type="text" name="nama" id="nama">

    <br><br>

    kategori<br>
    <input type="text" name="kategori" id="kategori">

    <br><br>

    <button type="submit" name="simpan">Simpan</button>
    <a href="produk.php">Kembali</a>
    
</form>

<?php 
    if (isset($_POST['simpan'])) {
        
        include 'koneksi.php';

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];

        $sql = "UPDATE produk SET nama = '$nama', kategori = '$kategori' WHERE id = '$id'; ";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "Barang berhasil ditambah";
            header('location: produk.php'); // berpindah ke halaman barang.php
        } else {
            $_SESSION['error'] = "Barang Gagal ditambah";
            header('location: produk.php'); // berpindah ke halaman barang.php
        }
        
    }
?>