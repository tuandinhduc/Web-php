<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liên Hệ || Shop Thể Thao BOLT </title>
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
          <li><a href="about.php">Về Công Ty</a></li>
          <li><a href="products.php">Sản Phẩm</a></li>
          <li><a href="cart.php">Xem Giỏ Hàng</a></li>
          <li><a href="orders.php">Đơn Hàng Của Tôi</a></li>
          <li class="active"><a href="contact.php">Liên Hệ</a></li>
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

        <p>Mọi liên hệ xin vui lòng gửi email cho chúng tôi tại địa chỉ <a href="mailto:support@techbarrack.com">support@techbarrack.com</a></p>

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
