<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cảm ơn Bạn</title>
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>

<body>

    <!-- Nội dung trang web của bạn ở đây -->

    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Hàm hiển thị thông báo thành công và chuyển hướng
        function hienThiThongBaoVaChuyenHuong() {
            // Hiển thị thông báo thành công
            Swal.fire({
                title: 'Hãy đến văn phòng Airlines',
                text: 'Để Thanh Toán Và Nhận Vé',
                icon: 'success',
                showConfirmButton: false, // Ẩn nút Xác nhận
                timer: 3000 // Thời gian hiển thị thông báo (ms)
            });
            // Chuyển hướng sau khoảng thời gian
            setTimeout(function() {
                window.location.href = '../index.php';
            }, 2000); // Thời gian chuyển hướng (ms), giống với timer ở trên
        }

        // Gọi hàm khi cần hiển thị thông báo và chuyển hướng
        hienThiThongBaoVaChuyenHuong();
    </script>

</body>

</html>