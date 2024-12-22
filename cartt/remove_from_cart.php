<?php
session_start();
$response = ['total' => 0];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Xóa sản phẩm khỏi giỏ hàng
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }

    // Tính tổng tiền còn lại
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $price = is_numeric($product['price']) ? (float) $product['price'] : 0;
            $quantity = is_numeric($product['quantity']) ? (int) $product['quantity'] : 0;
        
            if ($price > 0 && $quantity > 0) {
                $response['total'] += $price * $quantity;
            }
        }
        
        // Định dạng tổng tiền
        $response['total'] = number_format($response['total'], 0, ',', '.');        
        
    }
}

// Trả về JSON
header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
