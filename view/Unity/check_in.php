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
        margin-bottom: 20px;
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

    .active {
        color: red;
    }

    .containers {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
        overflow: hidden;
        width: 500px;

    }


    .form-header {
        background: repeating-linear-gradient(to right, red 0, rgb(9, 58, 237) 50%, red 100%);
        color: #fff;
        padding: 15px;
        text-align: center;
        background-size: 200% auto;
        background-position: 0 100%;
        animation: 5s linear infinite forwards gradient;
    }

    @keyframes gradient {
        0% {
            background-position: 0 0
        }

        100% {
            background-position: -200% 0
        }
    }

    .form-header h3 {
        color: #fff;
    }

    .form-group {
        padding: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    .form-group button {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
</style>
<section style="padding:30px;">
    <div class="row">
        <div class="col-4">
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
                    <li><a href="index.php?action=user_book&id=<?= $User_ID ?>">Lịch sử đặt vé</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-paper-plane"></i>
                    <li><a href="index.php?action=check_in" class="active">Check In</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-user-shield"></i>
                    <li> <a href="index.php?act=your">Tài khoản của bạn</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-recycle"></i>
                    <li> <a href="index.php?act=update_user">Cập Nhật Thông Tin</a></li>
                </div>
            </div>
        </div>
        <div class="col-6" style="display: flex;justify-content: center;align-items: center;">
            <!-- <form method="post">
                <label for="bookingId">ID đặt chỗ:</label>
                <input type="text" name="Booking_ID" required>

                <label for="lastName">Họ và tên đệm:</label>
                <input type="text" name="Name" required>

                <button type="submit">Check-in</button>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <?php include 'process.php'; ?> -->
            <div class="containers">
                <div class="form-header">
                    <h3>Check-in chuyến bay</h3>
                </div>
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="flightNumber">Flight Number:</label>
                    <input type="text" id="flightNumber" name="flightNumber" required>

                    <button type="submit">Check-in</button>
                </div>
            </div>

        </div>
    </div>
</section>