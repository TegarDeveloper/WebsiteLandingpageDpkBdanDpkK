<?php
require 'function.php';

if( isset($_POST["kirim"])) {
    if( message($_POST) > 0) {
        echo "<script>
                alert('Berhasil Mengirim Pesan!');
              </script>";
    }
    else {
        echo mysqli_error($conn);
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melowdy</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    

</head>
<body>

  <section class="parallax home" id="home" style="height: 800px;">
    <div class="container con-nav">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a href="#"><img src="foto/logo.svg" alt="" class="logofoto"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Learn
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="learn-guitar.php">Guitar String</a></li>
                  <li><a class="dropdown-item" href="#">Guitar Clasic</a></li>
                  <li><a class="dropdown-item" href="#">Guitar Listrik</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="berlangganan.php">Berlangganan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.php" style="color: #ECC179;">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="btn-nav">
          <a href="logout.php">Logout</a>
        </div>
      </nav>
      
      
        <div class="content">
          <div class="left">
            <h1>Ingin tau lebih<br> tentang kami?<br> Hubungi<br><span> Kontak Kami.</span></h1>
          </div>
          <div class="right">
            <div class="card">
                <img src="foto/mba2.png" alt="" class="foto-mba">
                <h1>CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL CALL </h1>
            </div>
          </div>
        </div>
    </div>
  </section>






  <!-- =========== HOME 2 ========== -->
  <section style="height: 800px; background-color: rgb(255, 255, 255);">
    <div class="container">
        <div class="content-2">
            <div class="left-content">
                <div class="title">
                    <h1>Contact <span>Us</span></h1>
                    <p>Jangan ragu untuk menghubungi kami kapan saja.<br> kami akan menghubungi Anda sesegera mungkin!</p>
                </div>
                <form action="" method="POST">
                  <div class="text-box">
                      <p>Nama</p>
                      <input type="text" name="nama_contact">
                  </div>
                  <div class="text-box">
                      <p>E-mail</p>
                      <input type="text" name="email_contact">
                  </div>
                  <div class="text-box">
                      <p>Message</p>
                      <input type="text" name="message_contact" class="message">
                  </div>
                  <div class="button">
                    <button type="submit" name="kirim" class="btn-kirim">Kirim Pesan</button>
                  </div>
                </form>
            </div>
            <div class="right-content">
                <div class="wrapper-content">
                    <div class="text">
                        <h1>Info</h1>
                    </div>
                    <div class="group-contact">
                        <div class="contact-flex">
                            <img src="foto/logo-telfon.svg" alt="">
                            <p>+62 853 678 8900 (Telp)</p>
                        </div>
                        <div class="contact-flex">
                            <img src="foto/logo-email.svg" alt="">
                            <p>melowdy33@gmail.com</p>
                        </div>
                        <div class="contact-flex">
                            <img src="foto/logo-location.svg" alt="">
                            <p>Perumahan Sumampir Indah, Purwokerto Utara</p>
                        </div>
                        <div class="contact-flex">
                            <img src="foto/logo-instagram.svg" alt="">
                            <p>@melowdykursus</p>
                        </div>
                        <div class="contact-flex">
                            <img src="foto/logo-facebook.svg" alt="">
                            <p>kursus melowdy</p>
                        </div>
                        <div class="contact-flex">
                            <img src="foto/logo-twitter.svg" alt="">
                            <p>@melowdy33</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  </section>























  <!-- =========== HOME 8 ========== -->
  <section style="height: 600px; background-image: url(foto/bgfooter.svg); margin-top: 100px;">
    <div class="container">
      <div class="content-8">
        <div class="wrapper1">
          <img src="foto/logoputih.svg" alt="" class="fotoback">
          <h3>Beautifull Music, & Elegant</h3>
          <p>Website untuk kalian para pecinta music yang<br> ingin belajar tentang alat music, melody<br> menyediakan beberapa kursus untuk anda.</p>
          <div class="icon">
            <img src="foto/facebook (7) 1.svg" alt="">
            <img src="foto/instagram (5) 1.svg" alt="">
            <img src="foto/whatsapp (4) 1.svg" alt="">
            <img src="foto/twitter 1.svg" alt="">
            <p>hubungi Contact di Atas</p>
          </div>
        </div>
        <div class="wrapper2">
          <div class="description">
            <div class="card1">
              <div class="title">
                <h3>KONTAK</h3>
                <div class="line"></div>
              </div>
              <div class="paragraf">
                <p>+62 866 2323 4493</p>
                <p>+62 866 4576 7653</p>
                <p>Perumahan Sumampir</p>
                <p>Melody33@gmail.com</p>
              </div>    
            </div>
            <div class="card1">
              <div class="title">
                <h3>KURSUS</h3>
                <div class="line"></div>
              </div>
              <div class="paragraf">
                <p>Kursus Guitar</p>
                <p>Kursus Biola</p>
                <p>Kursus Piano</p>
              </div>    
            </div>
            <div class="card1">
              <div class="title">
                <h3>KATEGORI</h3>
                <div class="line"></div>
              </div>
              <div class="paragraf">
                <p>Playing Music</p>
                <p>Website Landingpage</p>
                <p>Singing</p>
                <p>Kursus Alat Musik</p>
              </div>    
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <p>Copyright @2023 Melody Teams all right reserved</p>
      </div>
    </div>
  </section>









  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      
      center: true,
                loop: true,
                width: 350,
                nav: true,
                navSpeed: 1500,
                autoplay: true,
                autoplaySpeed: 1500,
                autoplayTimeout: 3000,
      

      centeredSlides: true,
      slidesPreview: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        loop: true,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper pagination",
      },
    });
  </script>



  <script type="text/javascript">
      window.addEventListener("scroll", function(){
          var nav = document.querySelector("nav");
          nav.classList.toggle("sticky", window.scrollY > 0);
      })
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>