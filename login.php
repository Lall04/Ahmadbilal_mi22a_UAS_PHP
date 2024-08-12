<?php
/**
* NIM : 2257401005
* Nama : Ahmad Bilal
* Kelas : MI22A
*/
?>

<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
        <div class="container">
            <div class="row" >
                <div class="col d-flex justify-content-center mt-5">
                    <form action="" method="POST" style="width: 300px;">
                        <h2>Login</h2>

                        <p>
                            <?php 
                                if (isset($_SESSION['error'])) {
                                    echo "<span style='color:red'>". $_SESSION['error'] ."</span>";
                                    unset($_SESSION['error']); // hapus klo sudah dimunculkan
                                } 
                            ?>
                        </p>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="username" class="form-control" placeholder="Enter username" name="username">        
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    </form>   
                </div>
            </div>         
        </div>

  </body>
</html>

<?php 

    if (isset($_POST['submit'])) {


        $username = $_POST['username'];
        $password = $_POST['password'];

   
        
        $sql = "SELECT username, password 
                FROM user 
                WHERE username = '$username' 
                AND password = ('$password');";

        include 'koneksi.php';
        $result = mysqli_query($koneksi, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) { 
            $_SESSION['user'] = $username;
            header('location: Admin.php');
        } else {
            $_SESSION['error'] = "Username / Password tidak sesuai";
            header('location: login.php');
        }

    }

?>