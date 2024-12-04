<?php
include 'config/db_connect.php'; 

$sql_products = "SELECT product_id, product_name, description, price, quantity, category, image_url FROM products";
$result_product = $connect -> query($sql_products);
?>

<section id="menu" class="py-5 product">
    <div class="container">
        <h1 class="text-center mb-4" style="font-family: Noto Sans KR, sans-serif; font-optical-sizing: auto; font-weight: 600; font-style: normal;">
            TOP BÁN CHẠY
        </h1>

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
                        <div class="card mb-4">
                            <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="<?php echo $row['product_name']; ?>" />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
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
    <h2 class="text-center">Danh mục sản phẩm</h2>

    <ul class="product" id="productCategoryTab">
        <?php
        $sqlCategories = "SELECT DISTINCT category FROM products";
        $categoriesResult = $connect->query($sqlCategories);
        while ($category = $categoriesResult->fetch_assoc()) {
        ?>
            <li class="card-item" role="presentation">
                <button class="card-<?php echo $category['category']; ?>" data-category="<?php echo $category['category']; ?>" type="button">
                    <?php echo ucfirst($category['category']); ?>
                </button>
            </li>
        <?php
        }
        ?>
    </ul>

    <div id="productList" class="row mt-3">
        <?php

        $sqlAllProducts = "SELECT * FROM products";
        $allProductsResult = $connect->query($sqlAllProducts);
        while ($product = $allProductsResult->fetch_assoc()) {
        ?>
            <div class="col-md-3 product-item" data-category="<?php echo $product['category']; ?>">
                <div class="card mb-4">
                    <img src="<?php echo $product['image_url']; ?>" class="card-img-top" alt="<?php echo $product['product_name']; ?>" />
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['product_name']; ?></h5>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
$connect->close();
?>
