<?php
// Kết nối với cơ sở dữ liệu (điều này cần được thay đổi dựa trên thông tin cấu hình của bạn)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airlines";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Xử lý dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Booking_ID = $_POST["Booking_ID"];
    $Name = $_POST["Name"];

    $checkinStatusSql = "SELECT Check_InFL FROM bookings WHERE Booking_ID = '$Booking_ID' AND Name = '$Name'";
    $checkinStatusResult = $conn->query($checkinStatusSql);

    if ($checkinStatusResult->num_rows > 0) {
        $row = $checkinStatusResult->fetch_assoc();
        $checkinStatus = $row["Check_InFL"];

        // Kiểm tra trạng thái check-in trước khi cập nhật
        if ($checkinStatus == 'Check-in') {
            echo "<script>
                    Swal.fire({
                        icon: 'info',
                        title: 'Thông Báo',
                        text: 'Bạn đã check-in rồi.',
                    });
                  </script>";
        } else {
            // Cập nhật trạng thái check-in trong cơ sở dữ liệu
            $updateSql = "UPDATE bookings SET Check_InFL = 'Check-in' WHERE Booking_ID = '$Booking_ID' AND Name = '$Name'";
            if ($conn->query($updateSql) === TRUE) {
                // Hiển thị thông báo SweetAlert2 khi check-in thành công
                echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Check-in Thành Công!',
                            text: 'Bạn đã check-in thành công chuyến bay.',
                        });
                      </script>";
            } else {
                // Hiển thị thông báo lỗi nếu có lỗi cập nhật
                echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi!',
                            text: 'Không thể thực hiện check-in. Vui lòng kiểm tra lại thông tin.',
                        });
                      </script>";
            }
        }
    } else {
        // Hiển thị thông báo lỗi nếu không tìm thấy đặt chỗ
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: 'Không tìm thấy đặt chỗ với thông tin đã nhập.',
                });
              </script>";
    }
}
// Đóng kết nối
$conn->close();
