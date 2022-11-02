<script src="jquery.js"></script>
<?php 

require 'config.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $hapus = mysqli_query($db, "DELETE FROM crud WHERE id='$id'");

    
    if($hapus){
        header("Location:utamacrud.php");
    }

}
