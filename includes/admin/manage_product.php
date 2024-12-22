<?php include '../../config/db_connect.php'; ?>

<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: includes/login.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
    display: flex;
    height: 100vh;
    margin: 0;
    overflow: hidden;
}

.sidebar {
    width: 250px;
    background-color: #343a40;
    color: #fff;
    padding: 20px 0;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
    height: 100%;
    position: sticky; /* Sidebar cố định */
    top: 0; 
}

.sidebar a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    display: block;
}

.sidebar a:hover {
    background-color: #495057;
}

.content {
    flex-grow: 1;
    overflow-y: auto; /* Bật cuộn cho nội dung */
    padding: 20px;
    background-color: #f8f9fa;
}

    </style>
</head>
<body>
    <!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center">Quản lý</h3>
    <a href="../admin/manage_product.php">Quản lý sản phẩm</a>
    <a href="../admin/manage_users.php">Quản lý người dùng</a>
    <a href="orders.php">Quản lý đơn hàng</a>
    <a href="../logout.php" class="btn btn-danger mt-auto mx-3">Đăng xuất</a>
</div>


    <!-- Main content -->
    <div class="content">
        <h2>Danh sách sản phẩm</h2>
        <a href="../admin/add.php" class="btn btn-success mb-3">Thêm sản phẩm mới</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Category</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $connect->query(" 
                    SELECT 
                        product_id, 
                        product_name, 
                        price, 
                        description, 
                        category_name, 
                        image_url
                FROM 
                    products 
                JOIN 
                    categories  ON products.category_id = categories.category_id
            ");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['product_id']}</td>
                        <td>{$row['product_name']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['category_name']}</td>
                        <td>
                            <img src='{$row['image_url']}' alt='{$row['product_name']}' style='width: 100px; height: auto;'>
                        </td>
                        <td>
                            <a href='../admin/edit.php?id={$row['product_id']}' class='btn btn-warning btn-sm'>Sửa</a>
                            <a href='../admin/delete.php?id={$row['product_id']}' class='btn btn-danger btn-sm'>Xóa</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
