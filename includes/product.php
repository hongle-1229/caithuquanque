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
    <link rel="stylesheet" href="../assets/css/product.css">
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

    <?php
    include '../config/db_connect.php';

    $sql_products = "
    SELECT 
        product_id, 
        product_name, 
        description, 
        price, 
        quantity, 
        category_name, 
        image_url 
    FROM 
        products
    JOIN 
        categories ON products.category_id = categories.category_id";

    $result_product = $connect->query($sql_products);
    ?>

    <section id="menu" class="py-5 product">
        <div class="container1">
            <p class="text-center mb-4" style="font-family: Noto Sans KR, sans-serif; font-optical-sizing: auto; font-weight: 600; font-style: normal;">
                TOP BÁN CHẠY
            </p>

            <div id="menuCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <?php
                    $counter = 0;
                    $activeClass = "active";
                    while ($row = $result_product->fetch_assoc()) {
                        if ($counter % 4 == 0) {
                            if ($counter > 0) echo '</div></div>';
                            echo '<div class="carousel-item ' . $activeClass . '"><div class="row">';
                            $activeClass = "";
                        }

                    ?>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <img src="<?php echo $row['image_url'] ? $row['image_url'] : 'default.jpg'; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                    <p class="card-title"><?php echo $row['price']; ?> </p>
                                    <form method="post" action="../cartt/add_to_cart.php">
                                        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                        <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>">
                                        <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                        <input type="hidden" name="product_image" value="<?php echo $product['image_url']; ?>">
                                        <button type="submit" class="btn-add-to-cart">
                                        <div class="cart-icon" id="cart-icon"><i class="shopping_cart_add fa-solid fa-cart-plus"></i></div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                    }
                    if ($counter > 0) echo '</div></div>';
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="container fade-in mt-5">
        <p class="text-center">Danh mục sản phẩm</p>

        <ul class="product2" id="productCategoryTab">
            <li class="card-item" role="presentation">
                <button class="card-title1" data-category="all" type="button">Tất cả sản phẩm</button>
            </li>
            <?php
            $sqlCategories = "
        SELECT DISTINCT 
            c.category_id, 
            c.category_name 
        FROM 
            categories c
        JOIN 
            products p 
        ON 
            c.category_id = p.category_id";
            $categoriesResult = $connect->query($sqlCategories);
            while ($category = $categoriesResult->fetch_assoc()) {
            ?>
                <li class="card-item" role="presentation">
                    <button class="card-title1" data-category="<?php echo $category['category_id']; ?>" type="button">
                        <?php echo ucfirst($category['category_name']); ?>
                    </button>

                </li>
            <?php
            }
            ?>
        </ul>


        <div id="productList" class="row mt-3">
            <?php
            $sqlDefaultProducts = "
            SELECT p.product_id, p.price, p.product_name, p.image_url, p.category_id 
            FROM products p";
            $defaultProductsResult = $connect->query($sqlDefaultProducts);

            while ($product = $defaultProductsResult->fetch_assoc()) {
            ?>
                <div class="col-md-4 product-item" data-category="<?php echo $product['category_id']; ?>">
                    <div class="card mb-4">
                        <img src="<?php echo $product['image_url'] ? $product['image_url'] : 'default.jpg'; ?>"
                            class="card-img-top"
                            alt="<?php echo $product['product_name']; ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                            <h5 class="card-title"><?php echo $product['price']; ?></h5>
                            <form method="post" action="../cartt/add_to_cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product['product_name']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">
                                <input type="hidden" name="product_image" value="<?php echo $product['image_url']; ?>">
                                <button type="submit" class="btn-add-to-cart">
                                    <div class="cart-icon" id="cart-icon"><i class="shopping_cart_add fa-solid fa-cart-plus"></i></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- footer -->
    <footer class="text-light py-5 backround-footer" style="margin-top: 50px">
        <div class="d-flex justify-content-around">
            <!-- Phần logo -->
            <div class="">
                <a href="../includes/home.php">
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

    <?php
    $connect->close();
    ?>

    <script src="../assets/js/product.js">

    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>