<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thành Công</title>
  <style>
    body {
      background-color: #f8f8f8;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    header.success-page {
      background-color: transparent;
      color: #4CAF50;
      padding: 20px 0;
      text-align: center;
    }

    main {
      text-align: center;
      padding: 20px;
    }

    h3 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    p {
      font-size: 18px;
      line-height: 1.5;
      color: #333;
    }

    footer {
      background-color: transparent;
      padding: 15px;
      text-align: center;
      margin-top: auto;
    }

    a {
      color: #009933;
      background-color: transparent;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      border: 1px solid #009933;
      transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease; /* Added box-shadow transition */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Added box shadow for elevation */
    }

    a:hover {
      background-color: #009933;
      color: #fff;
      transform: scale(1.05);
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2); /* Increase box shadow on hover for a higher elevation effect */
    }

    h3, p {
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }
  </style>
</head>
<body>

  <header class="success-page">
    <h3>Đặt hàng thành công!</h3>
  </header>

  <main>
    <p>Cảm ơn bạn đã mua sản phẩm của chúng tôi.</p>
    <p>Đơn hàng của bạn đang được vận chuyển, chờ xíu nha <3</p>
  </main>

  <footer>
    <a href="index.php">Quay lại trang chủ</a>
  </footer>

</body>
</html>
