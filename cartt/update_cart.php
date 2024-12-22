<?php
session_start();

// Kiểm tra xem có dữ liệu cần cập nhật không
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng
    if (isset($_SESSION['cart'][$product_id])) {
        // Cập nhật số lượng sản phẩm
        $_SESSION['cart'][$product_id]['quantity'] = $quantity;

        // Tính lại tổng tiền cho sản phẩm
        $productTotal = $_SESSION['cart'][$product_id]['price'] * $quantity;

        // Tính tổng tiền cho tất cả sản phẩm trong giỏ hàng
        $cartTotal = 0;
        foreach ($_SESSION['cart'] as $product) {
            $cartTotal += $product['price'] * $product['quantity'];
        }

        // Trả về dữ liệu JSON chứa tổng tiền sản phẩm và giỏ hàng
        echo json_encode([
            'productTotal' => number_format($productTotal, 0, ',', '.'),
            'cartTotal' => number_format($cartTotal, 0, ',', '.')
        ]);
    } else {
        echo json_encode(['error' => 'Sản phẩm không tồn tại trong giỏ hàng']);
    }
} else {
    echo json_encode(['error' => 'Dữ liệu không hợp lệ']);
}
?>
