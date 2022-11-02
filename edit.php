<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM crud WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $posisi = $_POST['posisi'];
        $perusahaan = $_POST['perusahaan'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($db, "UPDATE crud SET posisi='$posisi', perusahaan='$perusahaan',  alamat='$alamat' WHERE id='$id'");

        if($update){
            header("Location:utamacrud.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOWONGAN KERJA</title>
    <link rel="stylesheet" href="crudstyle.css">
</head>
<body>
    <header>
        <h2>LOWONGAN KERJA</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data LOWONGAN KERJA</h3>
        <form action="" method="post">
            
            <label for="">POSISI</label><br>
            <input type="text" name="posisi" class="form-text" value=<?=$row['posisi'];?>><br>
            
            <label for="">PRUSAHAN</label><br>
            <input type="text" name="perusahaan" class="form-text" value=<?=$row['perusahaan'];?>><br>
            
            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" value=<?=$row['alamat'];?>></textarea><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>