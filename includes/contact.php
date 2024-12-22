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
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>

<body>
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


    <div class="container contact1">
      <div class="mt-5">
          <div class="contact-header">
              <h1>Liên hệ với chúng tôi</h1>
              <h6 style="margin-top:10px">Hãy để chúng tôi lắng nghe bạn!</h6>
          </div>  
          <form  method="POST">
              <div class="mb-3">
                  <label for="name" class="form-label">Họ và tên</label>
                  <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn" required>
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Nhập email của bạn" required>
              </div>
              <div class="mb-3">
                  <label for="message" class="form-label">Lời nhắn</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Gửi lời nhắn của bạn cho chúng tôi" required></textarea>
              </div>
              <div class="text-center">
                  <button type="submit" class="btn send">Gửi lời nhắn</button>
              </div>
          </form>
      </div>

      <!-- Optional: Include Google Map -->
      <div class="map-container mt-5">
          <h3>Tìm chúng tôi tại:</h3>
          <h6>Địa chỉ: 405A - Thanh Bình - Mộ Lao</h6>
          <h6>Hotline: 0898828228</h6>
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345091356!2d144.9537363153159!3d-37.816279379751554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577b6c08aa5947!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1602164695086!5m2!1sen!2sau"
              allowfullscreen="" aria-hidden="false" tabindex="0" style="height: 300px; width: 500px"></iframe>
      </div>
  </div>
    
      <!-- Liên hệ -->
      <div class="about-contact text-center">
        <h2>Liên Hệ Với Chúng Tôi</h2>
        <p>Nếu bạn có bất kỳ câu hỏi hoặc thắc mắc nào, đừng ngần ngại liên hệ với chúng tôi.</p>
        <p>Email: Info.dmdcompany@gmail.com | Hotline: 0898828228</p>
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
                  class="logo-footer"
                />
              </a>
            </div>

            <!-- Phần thông tin liên hệ -->
            <div class="contact">
              <a style="text-decoration: none;" href="/html/index.html"
                ><h5 class="name-coffee">E-coffee Mộ Lao</h5></a
              >
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
                class="text-light me-3"
                ><i class="fab fa-facebook-f" style="color: #543310"></i
              ></a>
              <a
                href="https://l.facebook.com/l.php?u=https%3A%2F%2Ffood.be.com.vn%2Fresto%3Fid%3D90353%26name%3DTrung%2520Nguy%25C3%25AAn%2520E-coffee%2520-%2520Thanh%2520B%25C3%25ACnh%26fbclid%3DIwZXh0bgNhZW0CMTAAAR2KRzoUlv77QVHjbCC-RaeG2Lzv_kvONNRtqSAZVvUHhM-y-KBntMVEGaM_aem_oyWpSBE_P2pUtR-gpoZanw&h=AT3OIJZp_E7nGz28Hhh-2NkvKje-CHEq45eBaJMNNRy_4FzR1zjNneb7TA5z64zMrfLaLRrAX1fLTIiXsALfiEU2wJemoUGTRpu-eQLPpnuw08cDSScF3j_109HfL3uMfmdcIg"
                class="text-light me-3"
                ><i class="fa-solid fa-globe" style="color: #543310"></i
              ></a>
              <a
                href="https://l.facebook.com/l.php?u=https%3A%2F%2Ftiktok.com%2F%40ecoffee.mo.lao.xin.chao%3Ffbclid%3DIwZXh0bgNhZW0CMTAAAR3agx1bdtS58tKCaxsvAFCXeaNY2FTTtAmwb2Ez-DN2Qqm8CIYFSZ3HHho_aem_vgLEUS8cg5O73Tg-on9_Kw&h=AT05F86K4GtJXLs2EDD-QDHU1AqcgZBP7pSmePDCbpar9rKoq0KuN1PR3kYTB6xIC_h270KwNqXbhz41JICg26MzgqMKdkM1eNzY_to4FjQAQyq2x8c8o3o0qNe9YU6V4gPg"
                class="text-light me-3"
                ><i class="fa-brands fa-tiktok" style="color: #543310"></i
              ></a>
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

    <script src="">

    </script>

</body>

</html>