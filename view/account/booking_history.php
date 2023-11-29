<?php
if (is_array($loadAll_book_user)) {
    extract($loadAll_book_user);
}
?>
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
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    .image_user img {
        width: 70px;
        margin-top: 10px;
    }

    .product_rightst {
        padding: 10px;
        width: 100%;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    .conts {
        text-align: center;
    }

    .conts h4 {
        text-align: center;
        font-size: 17px;
    }

    .conts h3 {
        margin-bottom: 50px;
    }

    .smember_info {
        display: grid;
        width: 400px;
        margin-top: -75px;
        margin-bottom: 30px;
    }

    .smember {
        display: flex;
        justify-content: center;
    }

    .date,
    .member_class,
    .point {
        text-align: center;
        font-size: 18px;
        padding: 15px;
    }

    .smember i {
        margin-top: 10px;
        font-size: 30px;
        color: red;
    }

    .smember h6 {
        margin-top: 12px;
        font-size: 15px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
<section style="padding:30px;">
    <div class="row">
        <div class="col-3">
            <div class="product_rights">
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
                    <li><a href="index.php?action=user_book&id= <?= $User_ID ?>">Lịch sử đặt vé</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-user-shield"></i>
                    <li> <a href="index.php?act=your">Tài khoản của bạn</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-recycle"></i>
                    <li> <a href="index.php?act=update_user">Cập Nhật Thông Tin</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <li><a href="index.php?act=logout">Thoát tài khoản</a></li>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="product_rightst">
                <main>
                    <table>
                        <thead>
                            <tr>
                                <th>User_ID</th>
                                <th>CCCD</th>
                                <th>birth</th>
                                <th>Flight</th>
                                <th>Loại Vé</th>
                                <th>Ghế</th>
                                <th>Date_Book</th>
                                <th>Giá vé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dữ liệu lịch sử đặt vé máy bay sẽ được hiển thị ở đây -->

                            <?php
                            foreach ($loadAll_book_user as $user) {
                                extract($user);
                                echo " <tr>
                                          <td>$User_ID</td>
                                          <td>$CCCD</td>
                                          <td>$birth</td>
                                          <td>$Flight_ID</td>
                                          <td>$Ticket</td>
                                         <td>$Seat_Number</td>
                                         <td>$Booking_Date</td>
                                         <td>$Total_Price</td>
                                   </tr> ";
                            }
                            ?>
                            <!-- Thêm các dòng khác tương tự nếu có nhiều lịch sử đặt vé -->
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
</section>