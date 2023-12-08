<!DOCTYPE html>
<html lang="en">

<head>
    <title>𝑨𝒅𝒎𝒊𝒏_𝑷𝒐𝒘𝒆𝒓</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="favicon" rel="icon" type="../image/logo-acgen.png" sizes="50x50" href="../image/logo-acgen.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <!-- <script>
        swal("Xin Chào Admin", "Chúc Bạn 1 Ngày Tốt Lành Nhé", "");
    </script> -->
    <!-- Navbar-->
    <header class="app-header">
        <ul class="app-nav">
            <h3>Trang Quản Trị</h3>
            <form action="index.php?act=out" class="rows">
                <a class="app-nav__item" href="index.php?act=logout_admin">
                    Thoát <i class='bx bx-log-out bx-rotate-180'></i>
                </a>
            </form>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../image/Shipper_CPS3.77d4065.png" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b style="color:yellow;">Airline Power</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item active" href="index.php">
                    <i class='app-menu__icon bx bxs-home'></i>
                    <span class="app-menu__label">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_flight">
                    <i class='app-menu__icon bx bxs-rocket'></i>
                    <span class="app-menu__label">Chuyến Bay</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_sp">
                    <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
                    <span class="app-menu__label">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=list_client">
                    <i class='app-menu__icon bx bx-user-voice'></i>
                    <span class="app-menu__label">Khách hàng</span>
                </a>
            </li>
<<<<<<< Updated upstream
=======
            <li>
                <a class="app-menu__item" href="index.php?act=book_flight">
                    <i class='app-menu__icon bx bx bxl-paypal'></i>
                    <span class="app-menu__label">Đặt Chỗ</span>
                </a>
            </li>
            <!-- <li>
                <a class="app-menu__item" href="index.php?act=pay">
                    <i class='app-menu__icon bx bxl-paypal'></i>
                    <span class="app-menu__label">Thanh Toán</span>
                </a>
            </li> -->
            <li>
                <a class="app-menu__item" href="index.php?act=bill">
                    <i class='app-menu__icon bx bxs-user-check'></i>
                    <span class="app-menu__label">Hóa Đơn</span>
                </a>
            </li>
     
            <li>
                <a class="app-menu__item" href="index.php?act=blog">
                    <i class='app-menu__icon bx bxs-bookmark-alt-plus'></i>
                    <span class="app-menu__label">Blog</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=Evaluate">
                    <i class='app-menu__icon bx bx-chat'></i>
                    <span class="app-menu__label">Đánh giá</span>
                </a>
            </li>
            <?php
            if ($_SESSION['role'] == 1) {
            ?>
                <li>
                    <a class="app-menu__item" href="index.php?act=account">
                        <i class='app-menu__icon bx bx-user-voice'></i>
                        <span class="app-menu__label">Khách hàng</span>
                    </a>
                </li>
            <?php
            } ?>
>>>>>>> Stashed changes

            <li>
                <a class="app-menu__item" href="index.php?act=statistical">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Thống kê</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_voucher">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Voucher</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_type_ticket">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Type_ticket</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bx bx-chat'></i>
                    <span class="app-menu__label">Comment</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="../index.php">
                    <i class='app-menu__icon bx bx bx bxl-unity'></i>
                    <span class="app-menu__label">Public</span>
                </a>
            </li>

        </ul>
    </aside>
</body>

</html>