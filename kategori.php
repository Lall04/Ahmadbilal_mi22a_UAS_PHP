<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<h2>kategori</h2>

<a href="tambah_kategori.php">tambah kategori</a>

<br></br>

<table cellspacing="0" cellpadding="8px" border="1">
    <tr>
        <th>id</th>
        <th>nama</th>
        <th>hapus</th>
    </tr>

<?php 
    include 'koneksi.php';
    

    $sql = "SELECT id,nama FROM kategori";
    $query = mysqli_query($koneksi, $sql); // jalankan perintah SQL
?>

<?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><a href="hapus_kategori.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
        </tr>
    <?php endwhile; ?>

