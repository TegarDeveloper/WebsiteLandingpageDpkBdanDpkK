<?php
require 'function.php';

if( isset($_POST["login"])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username_user = '$Username'");
    
    //cek username 
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($Password, $row["password_user"])) {
            header("Location: home.php");
            exit;
        }
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
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    

</head>
<body>

    <div class="wrapper">
        <div class="content1">
            <div class="text">
                <img src="foto/logo.svg" alt="" class="foto-logo">
                <h1>LOGIN</h1>
                <span> AYO BERGABUNG<br> DENGAN KAMI</span>
                <img src="foto/bg-login.svg" alt="" class="foto-bg">
            </div>
        </div>
        <div class="content2">
            <div class="wrapper-content">
                <div class="card">
                    <img src="foto/user-logo.svg" alt="">
                    <form action="" method="post">
                        <div class="forum">
                            <h5>Username</h5>
                            <input type="text" name="username" id="username" placeholder="Masukkan username anda">
                        </div>
                        <div class="forum">
                            <h5>Password</h5>
                            <input type="password" name="password" id="password" placeholder="Masukkan password anda">
                            <p>Belum memiliki akun? <a href="registrasi.php">Registrasi</a></p>
                        </div>
                        <button type="submit" name="login" class="btn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  



  







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
  <script>
    // Owlcarousel
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        center: true,
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>