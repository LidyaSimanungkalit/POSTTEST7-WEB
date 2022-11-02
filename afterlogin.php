<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTEST4</title>
    <link rel="stylesheet" href="stylesheet/style.css" />
    
</head>
<body>
  <section id="home">
  <nav>
    <div class="header">
        <div class="header-logo">Lowongan Kerja</div>
        <div class="header-list">
          <ul>
            <li> <a href="#home">Home</a></li>
            <li> <a href="#carilowongan">Cari Lowongan</a></li>
            <li> <a href="#aboutme">About Me</a>
            <!-- <li> <img src="dark.png" alt="gambar dark"></li> -->
          </ul>
        </div>
        <div class="header-list2">
            <ul>
            <li class = "admn"> <a href="utamacrud.php">Admin crud</a>
            <li  class ="lgn"><a href="login.php">LOGIN</a>
            <li  class ="lgn"><a href="logout.php">log-out</a>
          
              </li>
            </ul>
          </div>
          
      </div>
    <div class="header2">
        <div class="header-logo2"> Cari Lowongan Kerja </div>
       
            <input class="srch" type="search" placeholder="cari berdasarkan minat anda">
            <a href="#" > <button class="btn">cari </button></a>

        
      </div>
    </nav>
     
      <div class="main">
            <div class="contents">
              <p id="keterangan" >Ubah Tampilan Ke darkmode dan lightmode</p>
              <button id="btn-info"> Button</button>
                <p class="section-title"><a href="#">lowongan terbaru</a></p>
                <div class="kotak">
                  <?php 
                    require 'config.php';
                    
                    $result = mysqli_query($db, "SELECT * FROM crud");
                    while($row = mysqli_fetch_array($result)){

                ?>

                  <div class="kotak1">
                  <div class ="logo"><img src="gambar/<?=$row['logo']?>" alt="" ></div>
                    <!-- <div class="logo"> <img src="logomcd.png" alt=""></div> -->
                    <div class="posisi"> <p><?=$row['posisi']?></p></div>
                    <div class="pt"> <p><?=$row['perusahaan']?></p></div>
                    <div class="lokasi"> <img src="lokasi.png" class="gloc"><?=$row['alamat']?></div>
                  </div>
                  <?php
                   
                        }
                ?>
                  <!-- <div class="kotak1">
                    <div class="logo"> <img src="logomcd.png" alt=""></div>
                    <div class="posisi"> <p>trainee manager</p></div>
                    <div class="pt"> <p>PT MCD INDONESIA</p></div>
                    <div class="lokasi"> <img src="lokasi.png" class="gloc">jakarta></div>
                    
                  </div> -->
                  <!-- <div class="kotak1">
                    <div class="logo"> <img src="logomcd.png" alt=""></div>
                    <div class="posisi"> <p>trainee manager</p></div>
                    <div class="pt"> <p>PT MCD INDONESIA</p></div>
                    <div class="lokasi"> <img src="lokasi.png" class="gloc">jakarta</div>
                  </div> -->
                  <!-- <div class="kotak1">
                    <div class="logo"> <img src="logomcd.png" alt=""></div>
                    <div class="posisi"> <p>trainee manager</p></div>
                    <div class="pt"> <p>PT MCD INDONESIA</p></div>
                    <div class="lokasi"> <img src="lokasi.png" class="gloc">jakarta</div>
                  </div> -->
                  <!-- <div class="kotak1"><div class="logo"> <img src="logomcd.png" alt=""></div>
                  <div class="posisi"> <p>trainee manager</p></div>
                  <div class="pt"> <p>PT MCD INDONESIA</p></div>
                  <div class="lokasi"> <img src="lokasi.png" class="gloc">jakarta</div></div>
                   -->
                  <!-- <div class="kotak1">
                    <div class="logo"> <img src="logomcd.png" alt=""></div>
                    <div class="posisi"> <p>trainee manager</p></div>
                    <div class="pt"> <p>PT MCD INDONESIA</p></div>
                    <div class="lokasi"> <img src="lokasi.png" class="gloc">jakarta</div>
                  </div>   -->
              </div>           
            </div>
            <div class="biodata" >
              <section id="aboutme">
                <div class="about"><h1>About Me</h1> <br></div>
                <!-- <div class="potoku"><img src="potoku.png"  >nama: lidya simanungkalit <br> Nim :2009106125<br></div> -->
                <div id="data">
                  <table border ="0" cellspacing="0" cellpadding="0">
                  <tr>
                     <!-- </td> -->
                    <td class="potoku"> <img src="potoku.jpg"  ></td> 
                    <td id="nama">
                      <pre>  Nama : Lidya simanungkalit</pre> 
                      <pre>  Nim    : 2009106125</pre> 
                      <pre>  Kelas  : Informatika C 2020</pre> 
                      <pre>  Prodi  : INFORMATIKA</pre> 
                    </td> 
                  </tr>
                </table> 
                  
                </div>
              </section>
              </div>
           
            </div>
          
              </section>
            
      
<!-- footer -->
      

<footer><nav>
  <div class="footer-logo">Lowongan Kerja Kaltim</div>
  <div class="footer-list">
    <ul>
      <li>Tentang</li>
      <li>Contact us</li>
      <li>@lidyagmail.com</li>
    </ul>
  </div>
</nav>
</footer>
<!-- 
      <div class="footer">
        <div class="footer-logo">Lowongan Kerja Kaltim</div>
        <div class="footer-list">
          <ul>
            <li>Tentang</li>
            <li>Contact us</li>
            <li>@lidyagmail.com</li>
          </ul>
        </div>
      </div> -->
   <script src =" javascript.js"></script> 
   <script src="jquery.js"></script>
</body>
</html>