<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="crudstyle.css">
</head>
<body>
    <header>
        <h2>CRUD ADMIN</h2>
    </header>
    
    <div class="form-class">
        <h3>TAMBAH LOWONGAN KERJA</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">
            
            <label for="">POSISI</label><br>
            <input type="text" name="posisi" class="form-text"><br>
            
            <label for="">PERUSAHAAN</label><br>
            <input type="text" name="perusahaan" class="form-text"><br>

            <label for="">lokasi</label><br>
            <textarea name="alamat" id="almt" ></textarea><br>

            <label for="">Tanggal Upload : </label><br>
            <input type="date" name="tanggal">

            <label for="">Gambar : </label><br>
            <input type="file" name="gambar"><br><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>