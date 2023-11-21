<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
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
                $Flight_time = $_POST['time_flight'];
                insert_flight($Flight_Number, $Start_City, $Arrival_City, $Departure_Time, $Arrival_Time, $Price, $Flight_time);
                $thongbao = "Thêm Thành Công";
            }
            include "Danh_Muc/add.php";
            break;
        case 'list_flight':
            $list_flight = loadAll_flight();
            include "Danh_Muc/list.php";
            break;
        case 'sua_flight':
            $update_flight = loadOne_flight();
            $list_flight = loadAll_flight();
            include "Danh_Muc/update.php";
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
            include "Danh_Muc/list.php";
            break;

            case 'add_type_ticket':
                // kt xem người dùng có click vào nút add hay không
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $Ticket_name = $_POST['ticket_name'];
                    $Status = $_POST['status'];
                    insert_type_ticket($Ticket_name,$Status);
                    $thongbao = "Thêm Thành Công";
                }
                include "Ticket/add.php";
                break;

            case 'list_type_ticket':
                $list_type_ticket = loadAll_type_ticket();
                include "Ticket/list.php";
                break;

            case 'delete_type_ticket';
            if (isset($_POST['id']) && ($_POST['id'] > 0)) {
                $Ticket_ID = $_GET['id'];
                delete_type_ticket($Ticket_ID);
            }
            $list_type_ticket =  loadAll_type_ticket();
            include "Ticket/list.php";
            break;
              
            case 'update_type_ticket':
                if (isset($_POST['id']) && ($_POST['id'])) {
                    $Ticket_ID = $_POST['ticket_id'];
                    $Ticket_name = $_POST['ticket_name'];
                    $Status = $_POST['status'];
                    Update_type_ticket($Ticket_ID, $Ticket_name, $Status);
                    $thongbao = "Cập nhật thành công";
                }
                $list_type_ticket = loadAll_type_ticket();
                include "Ticket/list.php";
                break;

                case 'sua_type_ticket':
                    $update_type_ticket = loadOne_type_ticket();
                    $list_type_ticket = loadAll_type_ticket();
                    include "Ticket/update.php";
                    break;

        case 'delete_flight';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                delete_danhmuc($ID);
            }
            $list_flight = loadAll_flight();
            include "Danh_Muc/list.php";
            break;
        case 'logout_admin':
            session_unset();
            header('location: index.php');
            break;
            // Voucher///////////////////////////////
        case 'add_voucher':
                // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $Voucher_name = $_POST['voucher_name'];
                $Voucher_value = $_POST['voucher_value'];
                $Voucher_start = $_POST['voucher_start'];
                $Voucher_end = $_POST['voucher_end'];
                insert_voucher($Voucher_name,$Voucher_value,$Voucher_start,$Voucher_end);
                $thongbao = "Thêm Thành Công";
            }
            include "Voucher/add.php";
            break;
        case 'list_voucher':
            $listvoucher= loadall_voucher();
            include "Voucher/list.php";
            break;
        case 'delete_voucher':
            if(isset($_GET['id_voucher']) && ($_GET['id_voucher'] > 0)){
                $Voucher_ID=$_GET['id_voucher'];
                delete_voucher($Voucher_ID);
            }
            $listvoucher= loadall_voucher();
            include "Voucher/list.php";
            break;
        case 'edit_voucher':
            $listonevoucher = loadone_voucher();
            $listvoucher= loadall_voucher();
            include "Voucher/update.php";
            break;
        case 'update_voucher':
                // kt xem người dùng có click vào nút add hay không
        if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
            $Voucher_ID = $_POST['id_voucher'];
            $Voucher_name = $_POST['voucher_name'];
            $Voucher_value = $_POST['voucher_value'];
            $Voucher_start = $_POST['voucher_start'];
            $Voucher_end = $_POST['voucher_end'];
            update_voucher($Voucher_ID,$Voucher_name,$Voucher_value,$Voucher_start,$Voucher_end);
            $thongbao = "Thêm Thành Công";
        }
        $listvoucher= loadall_voucher();
        include "Voucher/list.php";
        break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
