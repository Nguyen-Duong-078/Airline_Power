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

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['User_ID'])) {
    // Nếu đã đăng nhập, bạn có thể chuyển hướng người dùng đến trang chính
    header("Location: seats.php");
    exit();
}

// Kiểm tra xem người dùng đã gửi yêu cầu đăng nhập chưa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (loginUser($username, $password, $conn)) {
        // Đăng nhập thành công, chuyển hướng đến trang chính
        header("Location: index.php");
        exit();
    } else {
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        $loginError = "Đăng nhập thất bại. Vui lòng kiểm tra tên đăng nhập và mật khẩu.";
    }
}
?>

<!-- Form đăng nhập -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <h2>Đăng nhập</h2>
    <?php if (isset($loginError)) : ?>
        <p style="color: red;"><?php echo $loginError; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="login">Đăng nhập</button>
    </form>
</body>

</html>