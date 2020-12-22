<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Về Công Ty || Shop Thể Thao BOLT </title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"><!-- BOLT Sports Shop --> Shop Thể Thao BOLT</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">Về Công Ty</a></li>
          <li><a href="products.php">Sản Phẩm</a></li>
          <li><a href="cart.php">Xem Giỏ Hàng</a></li>
          <li><a href="orders.php">Đơn Hàng Của Tôi</a></li>
          <li><a href="contact.php">Liên Hệ</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">Tài Khoản</a></li>';
            echo '<li><a href="logout.php">Đăng Xuất</a></li>';
          }
          else{
            echo '<li><a href="login.php">Đăng Nhập</a></li>';
            echo '<li><a href="register.php">Đăng Ký</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>BOLT Sports Shop is a project on E-Commerce Website. All products listed are fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit
        <a href="http://www.techbarrack.com" target="_blank" rel="noopener noreferrer" title="Tech Barrack Solutions">Tech Barrack Solutions</a>.</p>

        <p>Why BOLT? I am a big fan of Usain Bolt. He is diligent and tries to surpass his previous achievements. And lastly, it was an instant thought. So went for it.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
