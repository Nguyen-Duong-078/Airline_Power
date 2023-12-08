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
        width: 300px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    .image_user img {
        width: 70px;
        margin-top: 10px;
        text-align: center;
    }

    .product_rightst {
        text-align: center;
        padding: 5px 15px;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
        border-radius: 10px;
    }

    .product_rightst label {
        text-align: start;
    }
</style>
<section style="padding:30px;">
    <div class="row">
        <div class="col-5">
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
                    <li><a href="index.php?action=user_book&id=<?= $User_ID ?>">Lịch sử đặt vé</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-paper-plane"></i>
                    <li><a href="index.php?action=check_in">Check In</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-user-shield"></i>
                    <li> <a href="index.php?action=your">Tài khoản của bạn</a></li>
                </div>
                <div class="child">
                    <i class="fa-solid fa-recycle"></i>
                    <li> <a href="index.php?action=update_user" class="active">Cập Nhật Thông Tin</a></li>
                </div>
            </nav>
        </div>
        <div class="col-5">
            <div class="product_rightst">
                <div class="conts">
                    <div class="image_user">
                        <img src="image/Shipper_CPS3.77d4065.png" alt="">
                    </div>
                    <?php
                    if (isset($_SESSION['username'])) {
                        extract($_SESSION['username']);
                    ?>
                        <h3> <?= $User ?></h3>
                    <?php
                    } else {
                    ?>
                        <h4>Xin Chào</h4>
                    <?php }
                    ?>
                </div>
                <form action="index.php?action=update_user" method="post">
                    <div class="smember_info">
                        <div class="form-group">
                            <div class="group">
                                <label>Email</label>
                            </div>
                            <input class="form-control" type="text" name="email" value="<?= $Email ?>">
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <label>Tel</label>
                            </div>
                            <input class="form-control" type="text" name="tel" value="<?= $Tel ?>">
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <label>FullName</label>
                            </div>
                            <input class="form-control" type="text" name="FullName" value="<?= $FullName ?>">
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <label>Tài khoản</label>
                            </div>
                            <input class="form-control" type="text" name="user" value="<?= $User ?>">
                        </div>
                        <div class="form-group">
                            <div class="group">
                                <label>Mật khẩu</label>
                            </div>
                            <input class="form-control" type="password" name="password" value="<?= $Password ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $User_ID ?>">
                            <input class="btn btn-info rounded p-2" type="submit" name="capnhat" value="Cập Nhật">
                        </div>
                        <div class="thongbao">
                            <h2>
                                <?php
                                if (isset($Thongbao) && ($Thongbao != ""))
                                    echo $Thongbao;
                                ?>
                            </h2>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>