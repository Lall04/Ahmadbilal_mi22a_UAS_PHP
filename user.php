<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<h2>User</h2>
<br></br>
<table cellspacing="0" cellpadding="8px" border="1">
    <tr>
        <th>id</th>
        <th>username</th>
    </tr>

<?php 
    include 'koneksi.php';
    

    $sql = "SELECT id,username FROM user";
    $query = mysqli_query($koneksi, $sql); // jalankan perintah SQL
?>

<?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
        </tr>
    <?php endwhile; ?>

