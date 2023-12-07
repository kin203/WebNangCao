<?php
session_start();
require_once '../config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/product-detail.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,900;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <title>Chi tiết sản phẩm</title>
</head>

<body>
  <?php
  include('header.php');
  ?>

  <div class="card-wrapper-cd">
    <div class="card-cd">
      <!-- left -->
      <div class="products-img">
        <!-- <img src="./img/iphone.jpg" alt=""> -->
        <div class="img-display">
          <div class="img-showcase">
            <?php
            require_once('../config/db.php');
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
            }
            $sql = "SELECT * FROM product, img_product WHERE  img_product.id_pro = product.id_pr AND product.id_pr = $id";
            $result =  executeResult($sql);
            foreach ($result as $row) {
              echo '
                  <img src="../uploads/libraryimg/' . $row['imgs'] . '" alt="phone img">
                  ';
            }
            ?>

          </div>
        </div>
        <div class="img-select">
          <?php

          $index = 1;
          $sql = "SELECT * FROM product, img_product WHERE  img_product.id_pro = product.id_pr AND product.id_pr = $id";
          $result =  executeResult($sql);
          foreach ($result as $row) {
            echo '
                <div class="img-item">
                  <a href="#" data-id="' . $index++ . '">
                    <img src="../uploads/libraryimg/' . $row['imgs'] . '" alt="phone img">
                  </a>
                </div>
              ';

            $name = $row['title'];
            $price = $row['price'];
            $price_old = $row['price_old'];
          }
          ?>
        </div>

        <div class="product-details">
          <h2>Bài viết đánh giá:</h2>
          <p>MacBook Air M2 2022 là thiết kế hoàn toàn khác biệt so với những dòng MacBook những năm trước. Đây tiếp tục là chiếc Ultrabook mỏng nhẹ tuyệt vời khi người dùng sở hữu được máy đẹp, phù hợp với nhiều nhu cầu và người dùng cơ bản.</p>
        </div>

      </div>

      <!-- right -->
      <div class="product-content">
        <h2 class="product-title"><?php echo $name ?> </h2>
        <div class="product-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>(4.8)</span>
        </div>
        <div class="ram">
          <a href="#">512GB</a>
          <a href="#">258GB</a>
          <a href="#">1TB</a>
        </div>
        <div class="color">
          <a href="#">Xám</a>
          <a href="#">Đen</a>
          <a href="#">Trắng</a>
        </div>
        <div class="product-price">
          <p class="old-price">Giá cũ: <span><?php echo number_format($price_old, 0, ",", ".") ?> VND</span></p>
          <p class="new-price">Giá khuyến mãi: <span><?php echo number_format($price, 0, ",", ".") ?></span></p>
        </div>
        <div class="action">

          <button class="btn" onclick="addToCart(<?= $id ?>)">
            Thêm vào giỏ <i class="fas fa-shopping-cart"></i>
          </button>
           
        </div>


        <div class="info">
          <h2>Chi tiết sản phẩm </h2>
          <?php
          $sql = "SELECT * FROM product, product_details WHERE product.id_pr = product_details.id_product AND product.id_pr = $id";
          $result = executeResult($sql);
          foreach ($result as $row) {
            echo '' . $row['product_details'] . '';
          }
          ?>
        </div>
      </div>
    </div>

    <!-- ------------- -->
    <div class="difference">
      <h2>Xem thêm sản phẩm khác</h2>
      <div class="filter">
        <a href="">macbook air m1</a>
        <a href="">macbook air core i5</a>
        <a href="">macbook pro</a>
        <a href="">imac</a>
        <a href="">màn 13 inch</a>
        <a href="">màn 16 inch</a>
        <a href="">imac cấu hình cao</a>
        <a href="">giá rẻ</a>
      </div>
    </div>
    <div class="carousel">
      <?php
      $sql = "SELECT * FROM product";
      $result = executeResult($sql);
      foreach ($result as $row) {
        echo '
          <a style="text-decoration: none" class="carousel-item" style="min-height: 400px" href="./ctsanpham.php?id=' . $row['id_pr'] . '">
          <div class="img-product-bottom">
            <img src="../uploads/' . $row['thumbnail'] . '" alt="">
          </div>
          <p style="height: 40px; overflow: hidden;">' . $row['title'] . '</p>
          <span>' . $row['price_old'] . '</span>
          <span>' . $row['price'] . '</span>
          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </a>
        ';
      }
      ?>
    </div>
  </div>
  <?php
  include('footer.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../js/main.js"></script>
</body>

</html>

<script type="text/javascript">
  function addToCart(id) {
    $.post('../api/api-product.php', {
      'action': 'add',
      'id': id
    }, function(data) {
      location.reload()
    })
  }
</script>