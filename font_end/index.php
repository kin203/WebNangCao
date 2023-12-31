<?php
session_start();
require_once '../config/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TKL Mac - Trang chủ</title>
  <link rel="stylesheet" href="../css/slick.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .banright {
  margin-left: 640px;
  margin-top: -255px;
  width: 60%;
}
  </style>
</head>

<body>
  <!-- header-start -->
  <?php
  include 'header.php';
  ?>
  <!-- header-end -->


  <!-- main -->
  <div class="container">
    <!-- slide banner -->
    <!--  -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 10px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/11/1/638344564091412233_F-C1_1200x300.png" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/10/31/638343876735905751_F-C1_1200x300-1.png" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/11/24/638364184429295637_KV_HOLIDAYTAKEOVER_FPT_1200x300.jpg" alt="" style="width:100%;">
        </div>
        <div class="item">
          <img src="https://images.fpt.shop/unsafe/fit-in/1200x300/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/11/1/638344564091412233_F-C1_1200x300.png" alt="" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="banright">
      <ul class="ban">
        <li>
          <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/dell-i3-desk-380x200.png" alt="" srcset=""></a>
        </li>
        <li>
          <a href="#"><img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/i7-r7-desk-380x200.png" alt="" srcset=""></a>
        </li>
      </ul>
      <div class="bannerto">
        <img src="../img/banner_to.jpg" alt="" srcset="">
      </div>
    </div>
  </div>

  <!-- container-start -->
  <div class="container">
    <!-- product trending-->
    <div class="first-row">
      <div class="name-product">
        <h4>Đang giảm giá</h4>
      </div>
      <div class="list-featured-product">
        <ul>
          <?php
          $sql = "SELECT * FROM product, categroy WHERE product.id_category = categroy.id_cate and id_cate = 1 LIMIT 3";
          $result = executeResult($sql);

          foreach ($result as $items) {
            echo '
            <li><a href="ctsanpham.php?id=' . $items['id_pr'] . '">' . $items['title'] . '</a></li>
          ';
          }
          ?>
          <li><a href="danhmuc.php?id=1">Xem tất cả sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <?php
      $sql = "SELECT * FROM product ORDER BY product.price DESC LIMIT 8";
      $result = executeResult($sql);
      foreach ($result as $items) {
        echo '
            <div class="col-md-3 col-sm-6">
              <div class="product-grid3">
                <div class="product-image3">
                  <a href="ctsanpham.php?id=' . $items['id_pr'] . '">
                    <img class="pic-1" src="../uploads/' . $items['thumbnail'] . '">
                    <img class="pic-2" src="../uploads/' . $items['thumbnail'] . '">
                  </a>
                  <ul class="social">
                    <li><a href="ctsanpham.php?id=' . $items['id_pr'] . '"><i class="fa fa-shopping-bag"></i></a></li>
                    <li><a href="ctsanpham.php?id=' . $items['id_pr'] . '"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                  <span class="product-new-label">Sale sập sàn</span>
                </div>
                <div class="product-content">
                  <h3 class="title"><a href="#">' . $items['title'] . '</a></h3>
                  <div class="price">
                    <span class="price-old-sale">' . number_format($items['price_old'], 0, ",", ".") . '</span>
                    <span class="price-new-sale">' . number_format($items['price'], 0, ",", ".") . '</span>
                  </div>
                  <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                    <li class="fa fa-star disable"></li>
                  </ul>
                </div>
              </div>
            </div>
          ';
      }
      ?>
    </div>
  </div>
  <!-- container-end -->

  <!-- Banner-start -->
  <div class="bannermain1">
    <a href="#"><img src="../img/banner-main.jpg" alt="" srcset=""></a>
  </div>
  <!-- Banner-end -->


  <!-- Product-Trending-start -->
  <div class="box-common">
    <div class="first-row">
      <div class="name-product">
        <h4>Sản phẩm nổi bật nhất</h4>
      </div>
      <div class="list-featured-product">
        <ul>
          <?php
          $sql = "SELECT * FROM product, categroy WHERE product.id_category = categroy.id_cate and id_cate = 1 LIMIT 4";
          $result = executeResult($sql);

          foreach ($result as $items) {
            echo '
            <li><a href="ctsanpham.php?id=' . $items['id_pr'] . '">' . $items['title'] . '</a></li>
          ';
          }
          ?>
          <li><a href="danhmuc.php?id=1">Xem tất cả sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="box-common_main">
      <div class="next-slider" style="display: block">
        <i class="fas fa-chevron-right"></i>
      </div>
      <div class="prev-slider" style="display: block">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="listproduct" data-size="10">
        <?php
        $sql = "SELECT * FROM product WHERE product.id_category=1 ORDER BY product.id_pr DESC LIMIT 10";
        $query = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($query)) { ?>
          <div class="item_sp">
            <a style="text-decoration: none;" href="ctsanpham.php?id=<?= $row['id_pr'] ?>">
              <div class="item_img" style="min-height:260px">
                <img class="" src="../uploads/<?= $row['thumbnail']; ?>">
              </div>
              <h3 class="ten" style="min-height: 60px;"><?= $row['title'] ?></h3>
              <div class="box-p">
                <p class="price-old"><?= number_format($row['price_old'], 0, ",", "."); ?> đ</p>
                <span class="percent">-15%</span>
              </div>
              <strong class="price"><?= number_format($row['price'], 0, ",", "."); ?> đ</strong>
              <ul class="rating">
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star disable"></li>
              </ul>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="first-row">
      <div class="name-product">
        <h4>Laptop nổi bật nhất</h4>
      </div>
      <div class="list-featured-product">
        <ul>
          <?php
          $sql = "SELECT * FROM product, categroy WHERE product.id_category = categroy.id_cate and id_cate = 2 LIMIT 4";
          $result = executeResult($sql);

          foreach ($result as $items) {
            echo '
            <li><a href="ctsanpham.php?id=' . $items['id_pr'] . '">' . $items['title'] . '</a></li>
          ';
          }
          ?>
          <li><a href="danhmuc.php?id=2">Xem tất cả sản phẩm</a></li>
        </ul>
      </div>
    </div>
    <div class="box-common_main">
      <div class="next-slider1" style="display: block">
        <i class="fas fa-chevron-right"></i>
      </div>
      <div class="prev-slider1" style="display: block">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="listproduct1" data-size="10">
        <?php
        $sql = "SELECT * FROM product WHERE product.id_category=2 ORDER BY product.id_pr ASC LIMIT 10";
        $query = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($query)) { ?>
          <div class="item_sp">
            <a style="text-decoration: none; color: black;" href="ctsanpham.php?id=<?= $row['id_pr'] ?>">
              <div class="item_img" style="min-height:250px">
                <img class="" src="../uploads/<?= $row['thumbnail']; ?>">
              </div>
              <h3 class="ten" style="min-height: 10px;"><?= $row['title'] ?></h3>
              <div class="box-p">
                <p class="price-old"><?= number_format($row['price_old'], 0, ",", "."); ?> đ</p>
                <span class="percent">-15%</span>
              </div>
              <strong class="price"><?= number_format($row['price'], 0, ",", "."); ?> đ</strong>
              <ul class="rating">
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star disable"></li>
              </ul>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="box-image">
      <div class="first-row">
        <div class="name-product">
          <h4>Chuyên gia thương hiệu</h4>
        </div>
      </div>
      <div class="item-box">
        <ul>
          <li><a href="danhmuc.php?id=1">
              <img src="https://anphat.com.vn/media/product/250_43594_laptop_apple_macbook_air_13_6_inch_z16000051_midnight__apple_m2___2_.jpg" alt="Macbook Pro">
            </a></li>
          <li><a href="danhmuc.php?id=1">
              <img src="https://anphat.com.vn/media/product/250_42855_laptop_apple_macbook_air_13_6_inch_mlxw3saa_x__m__1_.jpg" alt="Macbook">
            </a></li>
          <li><a href="danhmuc.php?id=1">
              <img src="https://anphat.com.vn/media/product/250_44696_mac_mini_m2_pro_2023_mnh73sa_a__3.jpg" alt="Mac Mini">
            </a></li>
        </ul>
      </div>
    </div>

      </div>


      <!-- Footer -->
      <?php include 'footer.php'; ?>
      <!-- Footer -->
</body>

</html>

<script src="../js/slick.js"></script>
<script src="../js/slick.min.js"></script>

<script>
  $('.listproduct1').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    prevArrow: $('.prev-slider1'),
    nextArrow: $('.next-slider1'),
  });
  $('.listproduct').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    prevArrow: $('.prev-slider'),
    nextArrow: $('.next-slider'),
  });
  $('.listproduc2').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    prevArrow: $('.prev-slider2'),
    nextArrow: $('.next-slider2'),
  });
</script>