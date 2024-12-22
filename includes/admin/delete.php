<?php include '../../config/db_connect.php'; ?>

<?php
$id = $_GET['id'];
$connect->query("DELETE FROM products WHERE id = $id");

header("Location: ../admin/manage_product.php");
exit();
?>
