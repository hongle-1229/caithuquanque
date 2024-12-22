<?php
session_start();
include '../../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($connect) {
        $stmt = $connect->prepare("SELECT * FROM users WHERE userName = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Kiểm tra nếu tìm thấy người dùng
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Kiểm tra mật khẩu (sử dụng password_verify nếu mật khẩu được mã hóa)
            if (password_verify($password, $user['password'])) {

                if ($user['role'] == 'admin') {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['username'] = $user['userName'];
                    $_SESSION['role'] = $user['role'];

                    header("Location: ../admin/manage_product.php");
                    exit;
                } elseif ($user['role'] == 'user') {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['username'] = $user['userName'];
                    $_SESSION['role'] = $user['role'];

                    header("Location: ../home.php");
                    exit;
                } else {
                    echo "<script>
                        alert('Bạn không có quyền truy cập trang này!');
                        window.location.href = '../login.php';
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Mật khẩu không đúng, hãy thử lại!');
                    window.location.href = '../login.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('Tài khoản không tồn tại!');
                window.location.href = '../login.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Không thể kết nối cơ sở dữ liệu!');
            window.location.href = '../login.php';
        </script>";
    }
}
?>
