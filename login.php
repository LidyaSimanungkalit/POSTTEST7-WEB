<?php
     session_start();
    require 'config.php';

    if (isset($_POST['log-in'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];

        $ambil = mysqli_query($db,"SELECT * FROM `akun` WHERE username = '$username'");

        if(mysqli_num_rows($ambil) === 1){
            $data = mysqli_fetch_assoc($ambil);
            if(password_verify($password,$data['password'])){
                header("location:afterlogin.php");
              
                exit();
            }else{
                echo "<script>
                alert('Username atau password salah');
                window.location = 'afterlogin.php';
                </script>";
            }
        }else{
            echo "<script>
            alert('Username atau password salah');
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
    <title>login</title>
    <link rel="stylesheet" href="loginstyle.css" />
    
</head>

<body>
<form action="" method="POST">

        <div class="loginn">
            <h2>Log-in</h2> 

           
            <input type="text"  name="username" placeholder ="  username" class="input">
            <br>
            <input type="password"  name="pwd"  placeholder =" kata sandi"class ="input" >
            <br>
            <!-- <input type="submit" name="sign-up"> -->
            <button type="submit" name="log-in" class="login" value="LOGIN">LOGIN</button>

            <p>  belum punya akun?</p>
            <a href="daftar.php">DAFTAR sekarang</a>
          
        
        </div>
        
    </form>
    

</body>

</html> 
