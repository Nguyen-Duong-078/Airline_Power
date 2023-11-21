<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/type_ticket.php";
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
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
