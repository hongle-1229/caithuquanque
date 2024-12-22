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
    <link rel="stylesheet" href="../assets/css/about.css">
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


    <div class="about-section  fade-in">
      <div class="section-header text-center">
        <h1 style="color: #543310;">Về Chúng Tôi</h1>
        <p style="color: #543310; font-size: 22px">Khám phá câu chuyện và sứ mệnh của chúng tôi</p>
      </div>
    
      <!-- Giới thiệu chung -->
      <div class="about-intro fade-in">
        <div class="">
          <img src="../assets/img/img/461752193_122117879000408155_8100472482624797614_n.jpg" alt="Lịch sử hình thành" class="img-fluid">
        </div>
        <div class=" text1">
          <h1>Câu chuyện của chúng tôi</h1>
          <p>Chúng tôi bắt đầu hành trình của mình từ năm 2010, với mong muốn <br> mang lại  những sản phẩm cà phê chất lượng cho mọi người...</p>
          <p>Sứ mệnh của chúng tôi là cung cấp trải nghiệm tốt nhất cho khách hàng <br> thông qua những ly cà phê tinh tế và đậm đà hương vị.</p>
        </div>
      </div>
    
      <!-- Đội ngũ -->
      <div class="about-team text-center fade-in">
        <h1 style="color: #543310;">Đội Ngũ Của Chúng Tôi</h1>
        <div class="row member">
          <div class="col-md-4">
            <img src="../assets/img/img/avatar-trang-4.jpg" alt="Thành viên 1" class="img-fluid rounded-circle">
            <h4>Đào Quý Dương</h4>
            <p>CEO & Founder</p>
          </div>
          <div class="col-md-4">
            <img src="../assets/img/img/avatar-trang-4.jpg" alt="Thành viên 2" class="img-fluid rounded-circle">
            <h4>Nguyễn Thị Trà My</h4>
            <p>CEO & Founder</p>
          </div>
          <div class="col-md-4">
            <img src="../assets/img/img/avatar-trang-4.jpg" alt="Thành viên 3" class="img-fluid rounded-circle">
            <h4>Lê Văn Hiếu</h4>
            <p>Quản lý</p>
          </div>
        </div>
      </div>
    
      <!-- Sản phẩm hoặc dịch vụ -->
      <div class="about-services fade-in">
        <h3 class="text-center">Sản Phẩm & Dịch Vụ</h3>
        <div class="row text-center">
          <div class="col-md-4">
            <i class="fas fa-coffee fa-3x"></i>
            <h4>Cà phê nguyên chất</h4>
            <p>Chúng tôi chuyên cung cấp các sản phẩm cà phê từ các nguồn nguyên liệu chọn lọc.</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-blender fa-3x"></i>
            <h4>Nước ép & sinh tố</h4>
            <p>Thức uống lành mạnh với hương vị tự nhiên, bổ dưỡng.</p>
          </div>
          <div class="col-md-4">
            <i class="fas fa-birthday-cake fa-3x"></i>
            <h4>Bánh ngọt & đồ ăn nhẹ</h4>
            <p>Thưởng thức những món bánh ngọt nhẹ nhàng, tinh tế với cà phê.</p>
          </div>
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