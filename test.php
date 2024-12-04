<?php

include 'config/db_connect.php';


$sql_users = "SELECT user_id, userName, email, fullname, phoneNumber, status, address FROM users";
$sql_products = "SELECT 
                    product_id, 
                    product_name, 
                    description, 
                    price, 
                    quantity,
                    category_name 
                FROM 
                    products
                JOIN categories ON products.category_id = categories.category_id";
$sql_orders = "SELECT 
                    orders.order_id, 
                    users.userName,
                    products.product_name, 
                    orders.quantity, 
                    products.price, 
                    (orders.quantity * products.price) AS total_price, 
                    orders.payment_method,
                    users.address,
                    orders.order_status
                FROM 
                    orders 
                JOIN products ON orders.product_id = products.product_id
                JOIN users ON orders.user_id = users.user_id" ;


$result_user = $connect -> query($sql_users);
$result_product = $connect -> query($sql_products);
$result_order = $connect -> query($sql_orders);


// user
if ($result_user->num_rows > 0 ) {
    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>Tên tài khoản</th>
        <th>Email</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Trạng thái</th>
    </tr>";

    while($row = $result_user->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["userName"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["phoneNumber"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
} else {
    echo "Không có dữ liệu.";
}

// products
if ($result_product ->num_rows>0){
    echo "<table border='1'>";
    echo "<tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Phân loại</th>
        </tr>";
    while ($row = $result_product->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["product_id"] ."</td>";
        echo "<td>" .$row["product_name"] . "</td>";
        echo "<td>" . $row["description"] ."</td>";
        echo "<td>" .$row["price"] . "</td>";
        echo "<td>" . $row["quantity"] ."</td>";
        echo "<td>" .$row["category_name"] . "</td>";
    }
    echo "</table>";
}

// orders
if ($result_order -> num_rows > 0 ){
    echo "<table border = '1'>";
    echo "<tr>
        <th>ID</th>
        <th>Tài khoản đặt hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Tổng</th>
        <th>Phương thức thanh toán</th>
        <th>Địa chỉ nhận hàng</th>
        <th>Trạng thái đặt hàng</th>
        </tr>";
    while ($row = $result_order -> fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["order_id"]. "</td>";
        echo "<td>" . $row["userName"] . "</td>";
        echo "<td>".$row["product_name"]. "</td>";
        echo "<td>".$row["quantity"]. "</td>";
        echo "<td>".$row["price"]. "</td>";
        echo "<td>".$row["total_price"]. "</td>";
        echo "<td>".$row["payment_method"]. "</td>";
        echo "<td>".$row["address"] . "</td>";
        echo "<td>" . $row["order_status"] ."</td>";
        echo "</tr>";
    }
    echo "</table>";
}


$connect->close();
?>
