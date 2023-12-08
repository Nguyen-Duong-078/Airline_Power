<style>
    .child {
        width: 250px;
        margin: 10px;
        padding: 15px;
        cursor: pointer;
    }

    .child a {
        margin-left: 10px;
        text-decoration: none;
        color: #080808;
        font-size: 1em;
        font-weight: bold;
    }

    .child a:hover {
        color: rgb(38, 0, 253);
    }

    .child li {
        list-style: none;
        display: inline-block;
    }

    .child .active {
        color: rgb(255, 21, 0);
    }

    .product_rights {
        float: left;
        border-radius: 10px;
        width: 230px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    .product_rightst th {
        text-align: center;
    }

    .bold {
        font-weight: bold;
        color: red;
        cursor: pointer;
    }

    .product_rightst .btn {
        border-radius: 5px;
    }

    .product_rights .active {
        color: red;
    }

    .active {
        color: red;
    }
</style>
<?php
if (is_array($loadAll_book_user)) {
    extract($loadAll_book_user);
}
?>
<?php

?>
<section style="padding:30px;">
    <div class="row">
        <div class="col-2">
            <nav class="product_rights">
                <div class="child">
                    <i class="fa-solid fa-house-chimney"></i>
                    <li><a href="index.php?action=booking_history">Trang Chủ</a></li>
                </div>
                <?php
                if ($role == 1) {
                ?>
                    <div class="child">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <li><a href="Admin/index.php">Vào Trang Quản Trị</a></li>
                    </div>
                <?php } else ?>
                <div class="child">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <li><a href="index.php?action=user_book&id=<?= $User_ID ?>" class="active">Lịch sử đặt vé</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-paper-plane"></i>
                    <li><a href="index.php?action=check_in">Check In</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-user-shield"></i>
                    <li> <a href="index.php?act=your">Tài khoản của bạn</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-recycle"></i>
                    <li> <a href="index.php?act=update_user">Cập Nhật Thông Tin</a></li>
                </div>
            </nav>
        </div>
        <div class="col-10">
            <div class="product_rightst">
                <main>
                    <table>
                        <thead>
                            <tr>
                                <?php
                                foreach ($loadAll_book_user as $user) {
                                    extract($user);
                                }
                                ?>
                                <th>Mã_ĐC</th>
                                <th>Name</th>
                                <th>Flight</th>
                                <th>Ngày Bay</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Loại Vé</th>
                                <th>Ghế</th>
                                <th>Date_Book</th>
                                <th>Giá vé</th>
                                <th>Pay</th>
                                <th>Trạng Thái</th>
                                <?php
                                if ($Check_InFL == 'Chưa check in') {
                                    echo "<th>Set</th>";
                                } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($loadAll_book_user as $user) {
                                extract($user);
                                $formatFlight_date = date("d/m/Y", strtotime($Flight_date));
                                $formatBooking_Date = date("d/m/Y", strtotime($Booking_Date));
                                $formattedPrice = number_format($Total_Price, 0, ',', '.');
                                if ($Check_InFL == 'Chưa check in') {
                                    echo "<tr>
                                          <td>$Booking_ID</td>
                                          <td>$Name</td>
                                          <td class='bold'>$Flight_ID</td>
                                          <td>$formatFlight_date</td>
                                          <td>$Start_city<br>$Departure_Time</td>
                                          <td>$End_city<br>$Arrival_Time</td>
                                          <td class='bold'>$Ticket</td>
                                          <td class='bold'>$Seat_Number</td>
                                          <td>$formatBooking_Date</td>
                                          <td>$formattedPrice</td>   
                                          <td class='bold text-danger'>$Pay</td>                                    
                                          <td class='bold text-danger'>$Check_InFL</td>
                                          <td>
                                          <a href='#' onclick='confirmCancelTicket(this);' data-id='$Booking_ID'><input class='btn btn-primary btn-sm' type='button' value='Hủy Vé'>
                                          </a>
                                          </td>
                                     </tr> ";
                                } else {
                                    echo "<tr>
                                          <td>$Booking_ID</td>
                                          <td>$Name</td>
                                          <td class='bold'>$Flight_ID</td>
                                          <td>$formatFlight_date</td>
                                          <td>$Start_city<br>$Departure_Time</td>
                                          <td>$End_city<br>$Arrival_Time</td>
                                          <td class='bold'>$Ticket</td>
                                          <td class='bold'>$Seat_Number</td>
                                          <td>$formatBooking_Date</td>
                                          <td>$formattedPrice</td>
                                          <td class='bold text-danger'>$Pay</td>
                                          <td class=' bold text-primary'>$Check_InFL</td>
                                     </tr> ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
</section>
<script>
    // Chức năng xử lý sự kiện click vào liên kết
    function confirmCancelTicket(link) {
        var dataId = link.getAttribute("data-id");
        Swal.fire({
            icon: "question",
            title: "Xác nhận hủy vé",
            text: "Bạn có chắc chắn muốn hủy vé?",
            showCancelButton: true,
            confirmButtonText: "Đồng ý",
            cancelButtonText: "Hủy bỏ",
        }).then((result) => {
            if (result.isConfirmed) {
                // window.location.href = 'index.php?action=delete_book&id=' + dataId; // Thay thế bằng URL
                // Gọi hàm thông báo Ajax
                simulateDeleteSuccess(dataId);
            }
        });
    }

    function simulateDeleteSuccess(dataId) {
        // Hiển thị thông báo thành công bằng SweetAlert2
        Swal.fire({
            icon: "success",
            title: "Hủy thành công",
            text: "Vé đã được hủy thành công.",
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng xác nhận, bạn có thể chuyển hướng hoặc thực hiện bất kỳ hành động nào khác
                window.location.href = 'index.php?action=huy_book&id=' + dataId;
            }
        });
    }
</script>