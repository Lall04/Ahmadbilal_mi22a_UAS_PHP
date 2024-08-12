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
    
    <h2>Tambah kategori</h2>

    Nama kategori<br>
    <input type="text" name="nama" id="nama">

    <br><br>

    <button type="submit" name="simpan">Simpan</button>
    <a href="kategori.php">Kembali</a>
    
</form>

<?php 
    if (isset($_POST['simpan'])) {
        
        include 'koneksi.php';

        $nama = $_POST['nama'];

        $sql = "INSERT INTO kategori (nama) VALUES('$nama');";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "Barang berhasil ditambah";
            header('location: kategori.php'); // berpindah ke halaman barang.php
        } else {
            $_SESSION['error'] = "Barang Gagal ditambah";
            header('location: kategori.php'); // berpindah ke halaman barang.php
        }
        
    }
?>