<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<h2>produk</h2>

<a href="tambah_produk.php">tambah produk</a>

<br></br>

<table cellspacing="0" cellpadding="8px" border="1">
    <tr>
        <th>kode produk</th>
        <th>nama produk</th>
        <th>kategori</th>
        <th>Action</th>
    </tr>

<?php 
    include 'koneksi.php';

    $sql = "SELECT id,nama,kategori FROM produk";
    $query = mysqli_query($koneksi, $sql); // jalankan perintah SQL
?>

<?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['kategori']; ?></td>
            <td><a href="hapus_produk.php?id=<?php echo $row['id']; ?>">Hapus</a>
            <a href="edit_produk.php?id=<?php echo $row['id']; ?>">edit</a>
        </td>
        </tr>
    <?php endwhile; ?>

