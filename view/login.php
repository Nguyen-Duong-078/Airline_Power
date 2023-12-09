<?php
session_start();

// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airlines";

// Kết nối đến cơ sở dữ liệu
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
    die();
}

function loginUser($username, $password, $conn)
{
    $query = "SELECT User_ID, Password FROM users WHERE User = :username";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result && $result['Password'] == $password) {
        $_SESSION['User_ID'] = $result['User_ID'];
        return true; // Đăng nhập thành công
    } else {
        return false; // Đăng nhập thất bại
    }
}
// Kiểm tra xem người dùng đã gửi yêu cầu đăng nhập chưa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (loginUser($username, $password, $conn)) {
        // Đăng nhập thành công, chuyển hướng đến trang chính
        header("Location: ../index.php");
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        $loginError = "Đăng nhập thất bại. Vui lòng kiểm tra tên đăng nhập và mật khẩu.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="../style/style_lg.css">
    <title>Login And register</title>
</head>

<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>
        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21">Login</h2>
            <form method="post">
                <div class="input-box animation" style="--i:1; --j:22">
                    <input type=" text " required name="username">
                    <label> Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation " style="--i:2; --j:23">
                    <input type="Password" required name="password">
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit " name="login" class="btn animation " style="--i:3; --j:24">Login</button>
                <div class="logreg-link animation " style="--i:4; --j:25">
                    <p>Don't have an account?
                        <a href="# " class="register-link ">
                            Sign Up
                        </a>
                    </p>
                </div>
            </form>
        </div>
        <div class="info-text login ">
            <h2 class="animation" style="--i:0; --j:20">Airline Power</h2>
            <p class="animation" style="--i:1; --j:21">Hệ Thống Bán Vé Máy Bay Online Rẻ Nhất Thị Trường</p>
        </div>

        <div class="form-box register ">
            <h2 class="animation" style="--i:17; --j:0">Sign Up</h2>
            <form action="#">
                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text " required>
                    <label> Username</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="text " required>
                    <label> Email</label>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="text " required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn animation" style="--i:21; --j:4">Register</button>
                <div class="logreg-link animation" style="--i:22; --j:5">
                    <p>Already have an account?
                        <a href="# " class="login-link">
                            Login
                        </a>
                    </p>
                </div>
            </form>
        </div>
        <div class="info-text register ">
            <h2 class="animation" style="--i:17;  --j:0">Welcome Back</h2>
            <p class="animation" style="--i:18; --j:1">Lorem ipsum dolor sit amet, consectetur adipisicing </p>
        </div>
    </div>

    <script>
        const wrapper = document.querySelector('.wrapper');
        const registerlink = document.querySelector('.register-link');
        const loginlink = document.querySelector('.login-link');

        registerlink.onclick = () => {
            wrapper.classList.add('active');
        }

        loginlink.onclick = () => {
            wrapper.classList.remove('active');
        }
    </script>
    <script>
        // Đoạn mã JavaScript điều khiển việc hiển thị thông báo SweetAlert2
        document.addEventListener('DOMContentLoaded', function() {
            // Kiểm tra trạng thái đăng nhập ở đây (ví dụ: biến isLoggedIn)
            var isLoggedIn = false;

            if (!isLoggedIn) {
                // Hiển thị thông báo SweetAlert2 nếu người dùng chưa đăng nhập
                Swal.fire({
                    icon: 'error',
                    title: 'Bạn chưa đăng nhập',
                    text: 'Vui lòng đăng nhập để tiếp tục!',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
</body>

</html>