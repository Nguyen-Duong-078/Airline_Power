<?php
session_start();
include_once "model/pdo.php";
include_once "model/Account.php";
include "model/flight.php";
include "model/type_ticket.php";
include "model/voucher.php";
include "global.php";
include "View/header.php";
include "model/Charging.php";

$listvoucher = loadall_voucher();
$list_type_ticket = loadAll_type_ticket();

if ((isset($_GET['action'])) && $_GET['action'] != "") {
    $act = $_GET['action'];
    switch ($act) {
        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $Username = $_POST['username'];
                $Password = $_POST['password'];
                $Email = $_POST['email'];
                $FullName = $_POST['hoten'];
                insert_user($Username, $Password, $Email, $FullName);
                $Thongbao = "Đăng kí thành công";
            }
            include "View/Client/register.php";
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $User = $_POST['username'];
                $Password = $_POST['password'];
                $check_user = check_user($User, $Password);
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header('location: index.php?act=home ');
                    //   $Thongbao = "Đăng nhập thành công";
                } else {
                    $Thongbao = "Tài khoản không tồn tại";
                }
            }
            include "view/Client/login.php";
            break;
        case 'logout':
            session_unset();
            header('location: index.php?act=home ');
            break;
        case 'forgot':
            include "View/Client/forgot.php";
            break;
        case '404':
            include "View/404.php";
            break;
        case 'contact':
            include "View/contact.php";
            break;
        case 'blog':
            include "View/blog.php";
            break;

        case 'search_flight':
            $listflight =loadAll_flight();
            include "View/flight.php";
            break;
        case 'abate':
            include "view/abate.php";
            break;
        case 'datve':
            include "View/booking.php";
            break;

        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
