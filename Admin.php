<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>


<h2>Admin</h2>

<div style="margin-bottom: 10px;">
    <a href="kategori.php" >kategori</a>
    <a href="produk.php">produk</a>
    <a href="user.php">user</a>
</div>

<table cellspacing="0" cellpadding="8px" border="1">
    <tr>
        <th>kategori</th>
        <th>produk</th>
        <th>user</th>
    </tr>

<?php 
    include 'koneksi.php';
    
    $sql = "SELECT kategori,produk,user FROM dashboard";
    $query = mysqli_query($koneksi, $sql); // jalankan perintah SQL
?>

<?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['kategori']; ?></td>
            <td><?php echo $row['produk']; ?></td>
            <td><?php echo $row['user']; ?></td>
        </tr>
    <?php endwhile; ?>

