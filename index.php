<?php
session_start();
include_once "model/pdo.php";
include_once "model/Account.php";
include "model/flight.php";
include "model/type_ticket.php";
include "model/voucher.php";
include "model/search.php";
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
            if (isset($_POST['Start_City']) && ($_POST['Start_City'] != "") && isset($_POST['Arrival_City']) && ($_POST['Arrival_City'] != "")) {
                $Start_City = $_POST['Start_City'];
                $Arrival_City = $_POST['Arrival_City'];
            } else {
                $Start_City = "";
                $Arrival_City = "";
            }
            $search_flight = search_flight($Start_City, $Arrival_City);
            include "View/flight.php";
            break;

        case 'book':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                $list_flight = loadAll_flight();
                $update_type_ticket = loadOne_type_ticket($ID);
            }
            include "View/info_flight.php";
            break;
<<<<<<< Updated upstream
        case 'abate':
            include "view/abate.php";
=======
        case "payment":
            if (isset($_GET['Flight']) && ($_GET['Flight'] > 0)) {
                $Flight = $_GET['Flight'];
                $list_flOne = loadOne_flight_book();
            }
            include "View/payment_method.php";
            break;
        case 'pay_code':
            if(isset($_POST['redirect']) && $_POST['redirect']){
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/Project_One/view/Vnpay.php";
                $vnp_TmnCode = "CGXZLS0Z";//Mã website tại VNPAY 
                $vnp_HashSecret = "XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN"; //Chuỗi bí mật
                $Price = $_POST['price'];
                $vnp_TxnRef = rand(00,9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = 'Noi dung thanh toan';
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $Price * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
                //Add Params of 2.0.1 Version
                //$vnp_ExpireDate = $_POST['txtexpire'];
                //Billing
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array('code' => '00'
                    , 'message' => 'success'
                    , 'data' => $vnp_Url);
                    if (isset($_POST['redirect'])) {
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
            }
            // include "View/Vnpay.php";
            break;
        case 'booking_history':
            include "view/account/user.php";
            break;
        case "user_book":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $User_ID = $_GET['id'];
                $loadAll_book_user = loadAll_book_user($User_ID);
            }
            include "view/account/booking_history.php";
>>>>>>> Stashed changes
            break;
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
