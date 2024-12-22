<?php
include '../config/db_connect.php';

$categoryId = isset($_GET['category_id']) ? (int)$_GET['category_id'] : 0;

$sqlProducts = "
    SELECT product_id, product_name, image_url 
    FROM products 
    WHERE category_id = $categoryId";

$result = $connect->query($sqlProducts);

if ($result->num_rows > 0) {
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode(['status' => 'success', 'products' => $products]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No products found']);
}
?>
