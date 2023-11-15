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
                // $Departure_Time = $_POST['time_start'];
                // $Arrival_Time = $_POST['time_end'];
                // $Price = $_POST['price'];
                // $Flight_time = $_POST['time_flight'];
                insert_flight($Flight_Number, $Start_City, $Arrival_City);
                $Thongbao = "Thêm Thành Công";
            }
            include "Danh_Muc/add.php";
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
