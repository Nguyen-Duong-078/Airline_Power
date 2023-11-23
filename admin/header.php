<!DOCTYPE html>
<html lang="en">

<head>
    <title>𝑨𝒅𝒎𝒊𝒏_𝑷𝒐𝒘𝒆𝒓</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="favicon" rel="icon" type="../image/logo-acgen.png" sizes="50x50" href="../image/logo-may-bay-17.png">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


</head>

<body>
    <header class="app-header">
        <ul class="app-nav">
            <h3>Trang Quản Trị</h3>
            <form action="#" class="rows">
                <a class="app-nav__item" href="#" id="btnLogout">
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
                <a class="app-menu__item" href="index.php">
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
                    <span class="app-menu__label">Đặt Chỗ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=account">
                    <i class='app-menu__icon bx bx-user-voice'></i>
                    <span class="app-menu__label">Khách hàng</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=statistical">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Thống kê</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_voucher">
                    <i class='app-menu__icon bx bx-printer'></i>
                    <span class="app-menu__label">Voucher</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_type_ticket">
                    <i class='app-menu__icon bx bxs-objects-vertical-bottom'></i>
                    <span class="app-menu__label">Ticket</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bxl-paypal'></i>
                    <span class="app-menu__label">Thanh Toán</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bxs-user-check'></i>
                    <span class="app-menu__label">Hóa Đơn</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bx-chair'></i>
                    <span class="app-menu__label">Chỗ Ngồi</span>
                </a>
            </li>
            <!-- <li>
                <a class="app-menu__item" href="../index.php">
                    <i class='app-menu__icon bx bx bx bxl-unity'></i>
                    <span class="app-menu__label">chức Vụ</span>
                </a>
            </li> -->
            <li>
                <a class="app-menu__item" href="index.php?act=add_charging">
                    <i class='app-menu__icon bx bx bx bxl-unity'></i>
                    <span class="app-menu__label">Tiền phát sinh</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=blog">
                    <i class='app-menu__icon bx bx-chat'></i>
                    <span class="app-menu__label">Blog</span>
                </a>
            </li>
        </ul>
    </aside>