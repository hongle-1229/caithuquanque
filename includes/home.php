<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome 6.x.x CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Ionicons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@7.1.2/dist/css/ionicons.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Noto+Sans+KR:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/css/index.css">
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
    

    <!-- introduce 1 -->
    <div class="\my-5 fade-in info">
      <div class="row align-items-center">
        <div class="col-md-5 animate__animated animate__fadeInLeft">
          <h1>Chào mừng bạn đến với E-Coffee Thanh Bình</h1>
          <p class="mb-3 describe">
            Cà phê Năng Lượng là điểm đến lý tưởng cho những ai yêu thích sự
            tinh tế của <br> hương vị cà phê. Chúng tôi tự hào mang đến những ly cà
            phê được pha chế từ <br> những hạt cà phê chất lượng cao nhất, đậm đà và
            đầy cảm hứng.
          </p>
          <p class="mb-3 describe">
            Khám phá thế giới cà phê với những hương vị phong phú và sáng tạo
            tại E-coffee<br> Thanh Bình. Nơi mỗi tách cà phê đều là một tác phẩm nghệ
            thuật.
          </p>
          <a href="../includes/product.php"><button class="btn explore-btn1">Khám phá ngay -></button></a>
        </div>
        <div
          class="col-md-6  animate__animated animate__fadeInRight"
        >
          <img
            src="../assets/img/img/istockphoto-1199467344-612x612.jpg"
            alt="Image"
            class="img-fluid rounded"
          />
        </div>
      </div>
    </div>

    <!-- content -->
    <!-- <div class="site" id="page"> -->
      <!-- Sản phẩm -->

      <div class=" product-section">
        <h1 class="text-center mb-4" style="color: #7a4b3a">
          Sản phẩm của chúng tôi
        </h1>
        <div class="row">
          <div class="col-md-4">
            <div class="product-card fade-in visible" style="animation-delay: 0s">
              <img
                src="../assets/img/img/19800101000539_IMG_8167.JPG"
                class="card-img-top"
                alt="Coffee Product 1"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Nước ép dứa</h5>
                <p class="card-text">Thơm mát, thanh nhiệt.</p>
                <a href="../includes/shopping_cart.php" class="btn btn-order">Đặt hàng</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-card fade-in visible" style="animation-delay: 0.1s">
              <img
                src="../assets/img/img/br.jpg"
                class="card-img-top"
                alt="Coffee Product 2"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Cà phê Năng lượng</h5>
                <p class="card-text">Một trải nghiệm cà phê không thể bỏ lỡ.</p>
                <a href="../includes/shopping_cart.php" class="btn btn-order">Đặt hàng</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-card fade-in visible" style="animation-delay: 0.2s">
              <img
                src="../assets/img/img/19800101001257_IMG_8180.JPG"
                class="card-img-top"
                alt="Coffee Product 3"
              />
              <div class="card-body text-center">
                <h5 class="card-title">Espresso</h5>
                <p class="card-text">Hương vị tuyệt vời cho mọi khoảnh khắc.</p>
                <a href="../includes/shopping_cart.php" class="btn btn-order">Đặt hàng</a>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- introduce 2 -->
      <div class="my-5 fade-in intro2">
        <div class="row align-items-center info2">
          <div class="col-md-5 text-center animate__animated animate__fadeInLeft">
            <img
              src="../assets/img/img/cafe-quente-da-manha-na-mesa-de-madeira_838382-54.avif"
              alt="Image"
              class="img-fluid rounded"
            />
          </div>
      
          <div class="col-md-5 animate__animated animate__fadeInRight intro2">
            <h1>Khám phá E-Coffee Mộ Lao</h1>
            <p class="mb-4 describe">
              Trung Nguyên E-Coffee Thanh Bình mang đến không gian cà phê doanh <br> nhân sang trọng, dịch vụ chuyên nghiệp. Đây là nơi lý tưởng để gặp gỡ, <br>giao lưu,  học tập và làm việc, với hương vị cà phê đỉnh cao, nâng cao <br>hiệu suất công việc
            </p>
            <p class="mb-4 describe">
              Khám phá thế giới cà phê với những hương vị phong phú và sáng tạo tại <br>
              E-coffee Thanh Bình. Nơi mỗi tách cà phê đều là một tác phẩm nghệ thuật.
            </p>
            <button class="btn explore-btn1">Về chúng tôi -></button>
          </div>
        </div>
      </div>
      

      <!-- introduce 3 -->
      <div class=" my-5 fade-in tanhuong" style="margin-bottom: 100px">
        <div
          class="row align-items-center coffee-section p-4"
          style="
            background: #f8f4e1;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
          "
        >
          <div class="col-md-6 p-4 text-section">
            <h2
              style="
                font-family: 'Protest Strike', sans-serif;
                color: #543310;
                font-weight: 300px;
              "
            >
              Tận hưởng từng khoảnh khắc
            </h2>
            <p class="lead" style="color: #5c4033">
              Đến với E-coffee Mộ Lao, bạn không chỉ thưởng thức cà phê mà còn
              tìm thấy sự kết nối với những người bạn yêu quý. Hãy tạo ra những
              kỷ niệm đẹp cùng nhau!
            </p>
            <button class="btn btn-lg explore-btn1">Khám phá</button>
          </div>
          <div class="col-md-6 p-0 image-section" style="display: flex">
            <img
              src="../assets/img/img/image2.jpg"
              class="img-fluid"
              style="
                border-radius: 15px;
                transition: transform 0.3s ease;
                height: 400px;
                padding-left: 50px;
                padding-right: 0px;
              "
              alt="Coffee Moment"
            />
            <div style="margin-left: 15px">
              <img
                src="../assets/img/img/z5734164548630_9ce60117646e0b18cd6a0f6cdf32b769.jpg"
                class="img-fluid"
                style="
                  border-radius: 15px;
                  transition: transform 0.3s ease;
                  height: 200px;
                  width: 300px;
                "
                alt="Coffee Moment"
              />
              <p></p>
              <img
                src="../assets/img/img/image3.jpg"
                class="img-fluid"
                style="
                  border-radius: 10px;
                  transition: transform 0.3s ease;
                  height: 180px;
                  width: 145px;
                  padding-top: 0px;
                "
                alt="Coffee Moment"
              />
              <img
                src="../assets/img/img/image1.jpg"
                class="img-fluid"
                style="
                  border-radius: 10px;
                  transition: transform 0.3s ease;
                  height: 180px;
                  width: 145px;
                  padding-top: 0px;
                "
                alt="Coffee Moment"
              />
            </div>
          </div>
        </div>
      </div>

      <!-- Ảnh của quán -->
      <!-- <div class="container fade-in anhcuaquan"> -->
        <div class="row mt-5 text-center ">
          <img
            src="../assets/img/img/Remove-bg.ai_1728579050529.png"
            alt=""
            class="logo-gallery"
            style="margin-left: 870px; margin-top:50px; margin-bottom:30px"
          />
          <h2>Không gian chuyên nghiệp, sang trọng</h2>
        </div>
        <div class="row mt-4">
          <!-- member 1 -->
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="d-flex justify-content-center">
                <img
                  src="../assets/img/img/gallery1.jpg"
                  alt="member1"
                  class="rounded-circle"
                  style="width: 250px; height: 250px; object-fit: cover"
                />
              </div>
              <div class="text-center">
                <button class="mb-0 mt-4 infor-coffee">
                  <a href="../includes/about.php">Xem thêm</a>
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="d-flex justify-content-center">
                <img
                  src="../assets/img/img/gallery2.jpg"
                  alt="member1"
                  class="rounded-circle"
                  style="width: 250px; height: 250px; object-fit: cover"
                />
              </div>
              <div class="text-center">
                <button class="mb-0 mt-4 infor-coffee">
                  <a href="../includes/about.php">Xem thêm</a>
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="d-flex justify-content-center">
                <img
                  src="../assets/img/img/z5843678222441_c3090ef2a3b2300d457f1ec7c5bcac1f.jpg"
                  alt="member1"
                  class="rounded-circle"
                  style="width: 250px; height: 250px; object-fit: cover"
                />
              </div>
              <div class="text-center">
                <button class="mb-0 mt-4 infor-coffee">
                  <a href="../includes/about.php">Xem thêm</a>
                </button>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card border-0">
              <div class="d-flex justify-content-center">
                <img
                  src="../assets/img/img/z5769505000206_bc19f68a18d8f1e83466eb83edc7cec2.jpg"
                  alt="member1"
                  class="rounded-circle"
                  style="width: 250px; height: 250px; object-fit: cover"
                />
              </div>
              <div class="text-center">
                <button class="mb-0 mt-4 infor-coffee">
                  <a href="../includes/about.php">Xem thêm</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->

      <footer class="text-light py-5 backround-footer" style="margin-top: 50px">
          <div class="d-flex justify-content-around">
            <!-- Phần logo -->
            <div class="">
              <a href="../includes/home.php">
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
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/index.js"></script>
</html>
