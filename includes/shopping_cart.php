<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap"
    rel="stylesheet" />
  <!-- Font Awesome 6.x.x CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- Ionicons CDN Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@7.1.2/dist/css/ionicons.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Noto+Sans+KR:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/shopping_cart.css">
</head>

<body>
  <?php session_start(); ?>

  <header class="header-1">
        <nav>
            <a href="index.php">
                <img src="../assets/img/Remove-bg.ai_1728579050529.png" alt="logo" style="height: 150px; width:150px">
            </a>
            <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="../includes/home.php">Trang chủ</a></li>
                <li><a href="../includes/product.php">Sản phẩm</a></li>
                <li><a href="../includes/about.php">Về chúng tôi</a></li>
                <li><a href="../includes/contact.php">Liên hệ</a></li>
                <li><a href="../includes/shopping_cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="/includes/myInfor.php"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="../includes/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Giỏ hàng của bạn</h1>
    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Hình ảnh</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Tổng tiền</th>
          <th>Hành động</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (!empty($_SESSION['cart'])) {
          $total = 0; // Khởi tạo tổng
          foreach ($_SESSION['cart'] as $product_id => $product) {
            // Kiểm tra và ép kiểu giá trị 'price' và 'quantity'
            $price = is_numeric($product['price']) ? (float) $product['price'] : 0;
            $quantity = is_numeric($product['quantity']) ? (int) $product['quantity'] : 0;

            // Tính subtotal chỉ khi giá trị hợp lệ
            if ($price > 0 && $quantity > 0) {
              $subtotal = $price * $quantity;
              $total += $subtotal;
            } else {
              $subtotal = 0; // Nếu không hợp lệ thì set subtotal là 0
            }
        ?>
            <tr>
              <td><img src="<?php echo isset($product['image_url']) && !empty($product['image_url']) ? $product['image_url'] : 'path/to/default_image.jpg'; ?>" alt="product" style="width: 80px;"></td>
              <td><?php echo $product['name']; ?></td>
              <td><?php echo number_format($price, 0, ',', '.'); ?> VND</td>
              <td>
                <form id="update-form-<?php echo $product_id; ?>" class="update-form" data-id="<?php echo $product_id; ?>">
                  <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>" min="1" class="form-control" style="width: 80px;">
                  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                  <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </form>
              </td>

              <td><?php echo number_format($subtotal, 0, ',', '.'); ?> VND</td>
              <td>
                <button class="btn  btn-danger btn-delete" data-id="<?php echo $product_id; ?>">Xóa</button>
              </td>
            </tr>
          <?php
          }
          ?>
          <tr>
            <td colspan="4" class="text-end"><strong>Tổng cộng:</strong></td>
            <td><strong id="total-price"><?php echo number_format($total, 0, ',', '.'); ?> VND</strong></td>
            <td></td>
          </tr>
        <?php
        } else {
          echo "<tr><td colspan='6' class='text-center'>Giỏ hàng của bạn trống</td></tr>";
        }
        ?>
      </tbody>
    </table>
    <div class="text-end">
      <a href="../includes/bill/checkout.php" class="btn btn-bill">Thanh toán</a>
      <a href="../includes/product.php" class="btn btn-continue ">Tiếp tục mua sắm</a>
    </div>
  </div>



  <!-- footer -->
  <footer class="text-light py-5 backround-footer" style="margin-top: 50px">
    <div class="d-flex justify-content-around">
      <!-- Phần logo -->
      <div class="">
        <a href="/html/index.html">
          <img
            src="../assets/img/img/Remove-bg.ai_1728579050529.png"
            alt="Logo"
            class="logo-footer" />
        </a>
      </div>

      <!-- Phần thông tin liên hệ -->
      <div class="contact">
        <a style="text-decoration: none;" href="/html/index.html">
          <h5 class="name-coffee">E-coffee Mộ Lao</h5>
        </a>
        <p class="text">Địa chỉ: 405A-Thanh Bình-Mộ Lao-Hà Đông</p>
        <p class="text">Email: Info.dmdcompany@gmail.com</p>
        <p class="text">Hotline: 0898828228</p>
      </div>

      <!-- Liên kết các trang -->
      <div class="link">
        <h5 class="name-coffee">Liên kết</h5>
        <ul class="list-unstyled">
          <li>
            <a href="../includes/home.php" class="link-footer">Trang chủ</a>
          </li>
          <li>
            <a href="../includes/product.php" class="link-footer">Sản phẩm</a>
          </li>
          <li>
            <a href="../includes/about.php" class="link-footer">Về chúng tôi</a>
          </li>
          <li>
            <a href="../includes/contact.php" class="link-footer">Liên hệ</a>
          </li>
        </ul>
      </div>

      <!-- Mạng xã hội -->
      <div class="follow">
        <h5 class="name-coffee">Theo dõi chúng tôi</h5>
        <a
          href="https://www.facebook.com/trungnguyenecoffeethanhbinh"
          class="text-light me-3"><i class="fab fa-facebook-f" style="color: #543310"></i></a>
        <a
          href="https://l.facebook.com/l.php?u=https%3A%2F%2Ffood.be.com.vn%2Fresto%3Fid%3D90353%26name%3DTrung%2520Nguy%25C3%25AAn%2520E-coffee%2520-%2520Thanh%2520B%25C3%25ACnh%26fbclid%3DIwZXh0bgNhZW0CMTAAAR2KRzoUlv77QVHjbCC-RaeG2Lzv_kvONNRtqSAZVvUHhM-y-KBntMVEGaM_aem_oyWpSBE_P2pUtR-gpoZanw&h=AT3OIJZp_E7nGz28Hhh-2NkvKje-CHEq45eBaJMNNRy_4FzR1zjNneb7TA5z64zMrfLaLRrAX1fLTIiXsALfiEU2wJemoUGTRpu-eQLPpnuw08cDSScF3j_109HfL3uMfmdcIg"
          class="text-light me-3"><i class="fa-solid fa-globe" style="color: #543310"></i></a>
        <a
          href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftiktok.com%2F%40ecoffee.mo.lao.xin.chao%3Ffbclid%3DIwZXh0bgNhZW0CMTAAAR3agx1bdtS58tKCaxsvAFCXeaNY2FTTtAmwb2Ez-DN2Qqm8CIYFSZ3HHho_aem_vgLEUS8cg5O73Tg-on9_Kw&h=AT05F86K4GtJXLs2EDD-QDHU1AqcgZBP7pSmePDCbpar9rKoq0KuN1PR3kYTB6xIC_h270KwNqXbhz41JICg26MzgqMKdkM1eNzY_to4FjQAQyq2x8c8o3o0qNe9YU6V4gPg"
          class="text-light me-3"><i class="fa-brands fa-tiktok" style="color: #543310"></i></a>
      </div>
    </div>

  </footer>
  <!-- Phần bản quyền -->
  <div class="footer-bottom">
    <div class="row">
      <div class="col text-center text-footer">
        <p class=" text-final" style="color:#543310">
          2024 E-coffee Mộ Lao. All Rights Reserved.
        </p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/shopping_cart.js"></script>

</body>

</html>