<?php
session_start();
<<<<<<< Updated upstream
include "model/pdo.php";
include "model/Account.php";
include "View/header.php";

=======
include_once "model/pdo.php";
include_once "model/Account.php";
include "model/flight.php";
include "model/type_ticket.php";
include "model/voucher.php";
include "model/search.php";
include "global.php";
include "model/Charging.php";
include "model/blog.php";
include "model/Evaluate.php";
include "model/billtest.php";
// include "model/process.php";
include "View/header.php";

$listvoucher = loadall_voucher();
$list_type_ticket = loadAll_type_ticket();
$list_blog = loadAll_blog();
$loadone_Bill = loadone_bill();

>>>>>>> Stashed changes
if ((isset($_GET['action'])) && $_GET['action'] != "") {
    $act = $_GET['action'];
    switch ($act) {
        case 'login':
            include "View/Client/login.php";
            break;
        case 'forgot':
            include "View/Client/forgot.php";
            break;
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
            include "View/flight.php";
            break;
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
