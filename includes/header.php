<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome 6.x.x CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Ionicons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@7.1.2/dist/css/ionicons.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/header.css">

</head>

<body>
    <header class="header-1">
        <nav>
            <a href="index.php">
                <img src="assets/img/Remove-bg.ai_1728579050529.png" alt="logo" style="height: 150px; width:150px">
            </a>
            <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="/includes/product.php">Sản phẩm</a></li>
                <li><a href="/includes/about.php">Về chúng tôi</a></li>
                <li><a href="/includes/contact.php">Liên hệ</a></li>
                <li><a href="/includes/shopping_cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><a href="/includes/order.php">
                        <svg class="file-svg" width="24" height="24" viewBox="0 0 24 24" fill="#E7F5DC" xmlns="http://www.w3.org/2000/svg">
                            <rect x="5" y="4" width="18" height="19" rx="2" stroke="#728156" stroke-width="2.5" />
                            <path d="M9 9H15" stroke="#728156" stroke-width="3" stroke-linecap="round" />
                            <path d="M9 13H15" stroke="#728156" stroke-width="3" stroke-linecap="round" />
                            <path d="M9 17H13" stroke="#728156" stroke-width="3" stroke-linecap="round" />
                        </svg></a></li>
                <li><a href="/includes/myInfor.php"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </nav>

    </header>
</body>
</html>