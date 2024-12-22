<?php
session_start();

// Lấy thông tin người dùng từ form thanh toán
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Xử lý thanh toán ở đây (ví dụ lưu thông tin vào database, kết nối với cổng thanh toán, v.v.)

// Sau khi thanh toán thành công, xóa giỏ hàng
unset($_SESSION['cart']);

// Chuyển hướng đến trang xác nhận thanh toán thành công
header("Location: ../includes/bill/payment_success.php");
exit();
?>
