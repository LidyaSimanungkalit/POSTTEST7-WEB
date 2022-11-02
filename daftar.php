
<?php
    require 'config.php';

    //CREATE
    if (isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek_user = mysqli_query($db, "SELECT * FROM `akun` WHERE username='$username'");
        $cek_login = mysqli_num_rows($cek_user);

        if($cek_login > 0){
            echo "<script>
                alert('Username telah terdaftar!');
                window.location = 'daftar.php';
            </script>";
        }else{
                $passwordd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_query($db, "INSERT INTO `akun` VALUES ('','$nama','$email','$username','$passwordd')");
                echo "<script>
                alert('BERHASIL DAFTAR!');
                window.location = 'login.php';
                </script>";
            
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>
    <link rel="stylesheet" href="daftarakunstyle.css" />
    
</head>

<body>
<form action="" method="POST">
        <div class="dftr">
            <h3>Buat Akun</h3> 
            <input autofocus="autofocus" placeholder=" masukkan Nama "  type="text" id="nama" name="fname" >
            <br>
            <input type="email" id="emaildaftar" name="emaildaftarr" placeholder =" masukkan email">
            <br>
            <input type="text" id="username" name="username"  placeholder =" masukkan username">
            <br>
           
            <input type="password" id="pwddaftar" name="pwd"  placeholder =" masukkan password">
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <input    type="submit" name="submit" value="masuk" data-disable-with="Please wait...">
        </div>
    </form>



</body>

</html>