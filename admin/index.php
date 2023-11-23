<?php
session_start();
// Hàm kiểm tra quyền của người dùng
function checkRole()
{
    // Kiểm tra xem người dùng có quyền admin không
    if ($_SESSION['User'] != 'Admin') {
        // Nếu không phải admin, chuyển hướng người dùng đến trang không có quyền
        header("Location: login.php");
        exit();
    }
}
// Kiểm tra đăng nhập
if (isset($_SESSION['User'])) {
    // Gọi hàm kiểm tra quyền sau khi đăng nhập
    checkRole();
    // Người dùng có quyền admin đã đăng nhập, có thể hiển thị trang chính
} else {
    // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: login.php");
    exit();
}
include "../model/pdo.php";
include "../model/flight.php";
include "../model/type_ticket.php";
include "../model/voucher.php";
include "../model/Account.php";
include "../model/blog.php";
include "../model/Evaluate.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_flight':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $Flight_Number = $_POST['number_flight'];
                $Start_City = $_POST['start'];
                $Arrival_City = $_POST['end'];
                $Departure_Time = $_POST['time_start'];
                $Arrival_Time = $_POST['time_end'];
                $Price = $_POST['price'];
                $Passenger = $_POST['Passenger'];
                $Voucher = $_POST['Voucher'];
                $Flight_time = $_POST['time_flight'];
                insert_flight($Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Passenger, $Voucher, $Flight_time);
                $thongbao = "Thêm Thành Công";
            }
            $listvoucher = loadall_voucher();
            include "Flight/add.php";
            break;
        case 'list_flight':
            $list_flight = loadAll_flight();
            include "Flight/list.php";
            break;
        case 'sua_flight':
            $update_flight = loadOne_flight();
            $list_flight = loadAll_flight();
            include "Flight/update.php";
            break;
        case 'update_flight':
            if (isset($_POST['id']) && ($_POST['id'])) {
                $Flight_ID = $_POST['id'];
                $Flight_Number = $_POST['number_flight'];
                $Start_City = $_POST['start'];
                $Arrival_City = $_POST['end'];
                $Departure_Time = $_POST['time_start'];
                $Arrival_Time = $_POST['time_end'];
                $Price = $_POST['price'];
                $Flight_time = $_POST['time_flight'];
                Update_danhmuc($Flight_ID, $Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Flight_time);
                $thongbao = "Cập nhật thành công";
            }
            $list_flight = loadAll_flight();
            include "Flight/list.php";
            break;

        case 'delete_flight';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_flight($ID);
            }
            $list_flight = loadAll_flight();
            include "Flight/list.php";
            break;

        case 'add_type_ticket':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $Ticket_name = $_POST['ticket_name'];
                $Status = $_POST['status'];
                $Flights_Tick = $_POST['Flights_Tick'];
                $Ticket_number = $_POST['Ticket_number'];
                insert_type_ticket($Ticket_name, $Status, $Flights_Tick, $Ticket_number);
                $thongbao = "Thêm Thành Công";
            }
            $list_flight = loadAll_flight();
            include "Ticket/add.php";
            break;

        case 'list_type_ticket':
            $list_type_ticket = loadAll_type_ticket();
            include "Ticket/list.php";
            break;

        case 'sua_type_ticket':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                $list_flight = loadAll_flight();
                $update_type_ticket = loadOne_type_ticket($ID);
            }
            include "Ticket/update.php";
            break;

        case 'update_type_ticket':
            if (isset($_POST['id']) && ($_POST['id'])) {
                $Ticket_ID = $_POST['id'];
                $Ticket_name = $_POST['ticket_name'];
                $Status = $_POST['status'];
                $Flights_Tick = $_POST['Flights_Tick'];
                $Ticket_number = $_POST['Ticket_number'];
                Update_type_ticket($Ticket_ID, $Ticket_name, $Status, $Flights_Tick, $Ticket_number);
                $thongbao = "Cập nhật thành công";
            }
            $list_flight = loadAll_flight();
            $list_type_ticket = loadAll_type_ticket();
            include "Ticket/list.php";
            break;

        case 'delete_type_ticket';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $Ticket_ID = $_GET['id'];
                delete_type_ticket($Ticket_ID);
            }
            $list_type_ticket =  loadAll_type_ticket();
            include "Ticket/list.php";
            break;

            // Voucher

        case 'add_voucher':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $Voucher_name = $_POST['voucher_name'];
                $Voucher_value = $_POST['voucher_value'];
                $Voucher_start = $_POST['voucher_start'];
                $Voucher_end = $_POST['voucher_end'];
                $Image = $_FILES['Image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Image"]["name"]);
                if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_voucher($Voucher_name, $Voucher_value, $Voucher_start, $Voucher_end, $Image);
                $thongbao = "Thêm Thành Công";
            }
            include "Voucher/add.php";
            break;

        case 'list_voucher':
            $listvoucher = loadall_voucher();
            include "Voucher/list.php";
            break;

        case 'delete_voucher':
            if (isset($_GET['id_voucher']) && ($_GET['id_voucher'] > 0)) {
                $Voucher_ID = $_GET['id_voucher'];
                delete_voucher($Voucher_ID);
            }
            $listvoucher = loadall_voucher();
            include "Voucher/list.php";
            break;

        case 'edit_voucher':
            $listonevoucher = loadone_voucher();
            $listvoucher = loadall_voucher();
            include "Voucher/update.php";
            break;

        case 'update_voucher':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $Voucher_ID = $_POST['id_voucher'];
                $Voucher_name = $_POST['voucher_name'];
                $Voucher_value = $_POST['voucher_value'];
                $Voucher_start = $_POST['voucher_start'];
                $Voucher_end = $_POST['voucher_end'];
                $Image = $_FILES['Image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Image"]["name"]);
                if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_voucher($Voucher_ID, $Voucher_name, $Voucher_value, $Voucher_start, $Voucher_end, $Image);
                $thongbao = "Thêm Thành Công";
            }
            $listvoucher = loadall_voucher();
            include "Voucher/list.php";
            break;

        case 'account':
            $list_account = loadAll_User();
            include "Account/list.php";
            break;
        case 'edit_account':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                $update_account = loadOne_account($ID);
            }
            include "Account/update.php";
            break;
        case 'update_account':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $Ticket_ID = $_POST['id'];
                $role = $_POST['role'];
                $Status = $_POST['Status'];
                Update_account($Ticket_ID, $role, $Status);
                $thongbao = "Thêm Thành Công";
            }
            $list_account = loadAll_User();
            include "Account/list.php";
            break;

        case 'delete_account':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                delete_account($ID);
            }
            $list_account = loadAll_User();
            include "Account/list.php";
            break;

            // case 'logout_admin':
            //     session_destroy();
            //     header('location: index.php');
            //     break;
        case 'add_charging':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tax = $_POST['tax'];
                $service = $_POST['service'];
                $Flights_ID = $_POST['Flights_ID'];
                insert_charging($tax, $service, $Flights_ID);
            }
            $list_flight = loadAll_flight();
            include "Charging/add.php";
            break;
        case 'list_charging':
            $list_flight = loadAll_flight();
            $listcharging = loadall_charging();
            include "Charging/list.php";
            break;
        case 'blog':
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $Blog_name = $_POST['Blog_name'];
                $Blog_content = $_POST['Blog_content'];
                $Date = $_POST['Date'];
                $Image = $_FILES['Image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["Image"]["name"]);
                if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_blog($Blog_name, $Blog_content, $Date, $Image);
                $thongbao = "Thêm Thành Công";
            }
            include "Blog/add.php";
            break;
        case 'list_blog':
            $list_blog = loadAll_blog();
            include "Blog/list.php";
            break;
        case 'delete_blog':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_blog($ID);
            }
            $list_blog = loadAll_blog();
            include "Blog/list.php";
            break;
        case 'Evaluate':
            $list_evaluate =  loadAll_comments(0);
            include "../Admin/Evaluate/list.php";
            break;
        case 'delete_evaluate':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_comment($ID);
            }
            $list_evaluate =  loadAll_comments(0);
            include "../Admin/Evaluate/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
