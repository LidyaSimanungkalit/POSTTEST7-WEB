<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $posisi = $_POST['posisi'];
    $perusahaan = $_POST['perusahaan'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$perusahaan.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = mysqli_query($db,"INSERT INTO crud VALUES ('','$gambar_baru','$posisi','$perusahaan','$alamat','$tanggal')");
        if($query){
            header("Location:utamacrud.php");
        }else{
            echo "gagal kirim";
        }
    }
    
}