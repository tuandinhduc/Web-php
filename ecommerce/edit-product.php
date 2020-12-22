
<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Thay đổi thông tin sản phẩm</h3></br>
        <?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$name = $_POST["name"];
		$code = $_POST["code"];
		$description = $_POST["description"];
		$price = $_POST["price"];
		

        $id = $_POST["id"];
		// Viết câu lệnh cập nhật thông tin người dùng
		$sql1 = "UPDATE products SET product_code = '$code', product_name = '$name', product_desc = '$description', price = '$price' WHERE id=$id";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($mysqli,$sql1);
		header('Location: add-product.php');
	}

	


?>
        <?php
        $id = $_GET['id'];
          $result = $mysqli->query("SELECT * from products where id = " .$id);
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-10 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';

            }
          }
        ?>
      </div>
    </div>

 
    <form action="edit-product.php" method="post">
		<table>
			
			<tr>
				<td nowrap="nowrap">Tên :</td>
				<td><input type="text" id="name" name="name" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Code :</td>
				<td><input type="text" id="code" name="code" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Mô tả :</td>
				<td><input type="text" id="description" name="description" ></td>
			</tr>
			<tr>
                <td nowrap="nowrap">Giá :</td>
				<td><input type="text" id="price" name="price" ></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Cập nhật thông tin"></td>
			</tr>

		</table>
		
	</form>



        <footer style="margin-top:10px;">
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
