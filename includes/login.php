<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    
<div class="container mt-5 login">
        <div class="row justify-content-center content">
            <div class="col-md-6">
                <h1 class="text-center">Đăng nhập</h1>
                <form action="admin/check_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập</label> <br>
                        <input type="text" class="form-control" placeholder="Nhập tên của bạn" id="username" name="username" required >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label> <br>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 sub">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>