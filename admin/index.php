<?php
session_start();
include "../model/pdo.php";
include "../model/danhmuc.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dm':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                inser_danhmuc($tenloai);
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
