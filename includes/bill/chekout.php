<?php
session_start();

$total = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Thanh toán</h2>
        
        <?php if ($total > 0) { ?>
            <p><strong>Tổng tiền: </strong><?php echo number_format($total); ?> VND</p>

            <form action="../includes/bill/chekout.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <button type="submit" class="btn btn-success">Xác nhận thanh toán</button>
            </form>
        <?php } else { ?>
            <p>Giỏ hàng của bạn trống. Vui lòng thêm sản phẩm trước khi thanh toán.</p>
        <?php } ?>
    </div>
</body>
</html>
