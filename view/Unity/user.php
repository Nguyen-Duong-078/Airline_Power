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
</style>
<section style="padding:30px;">
    <div class="row">
        <div class="col-5">
            <div class="product_rights">
                <div class="child">
                    <i class="fa-solid fa-house-chimney"></i>
                    <li><a href="index.php?action=booking_history" class="active">Trang Chủ</a></li>
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
            </div>
        </div>
        <div class="col-4">
            <div class="product_rightst">
                <div class="conts">
                    <div class="image_user">
                        <img src="image/Shipper_CPS3.77d4065.png" alt="">
                    </div>
                    <?php
                    if (isset($_SESSION['username'])) {
                        extract($_SESSION['username']);
                    ?>
                        <h4>Xin Chào</h4>
                        <h3> <?= $User ?></h3>
                    <?php
                    } else {
                    ?>
                        <h4>Xin Chào</h4>
                    <?php }
                    ?>
                </div>
                <div class="smember">
                    <div class="date">
                        <h5>Ngày Tham Gia</h5>
                        <i class="fa-regular fa-calendar-check"></i>
                        <h6>12/10/2023</h6>
                    </div>
                    <div class="member_class">
                        <h5>Hạng Thành Viên</h5>
                        <i class="fa-solid fa-medal"></i>
                        <h6>Null</h6>
                    </div>
                    <div class="point">
                        <h5>Điểm Tích Lũy</h5>
                        <i class="fa-regular fa-sun"></i>
                        <h6>0</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>