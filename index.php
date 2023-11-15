<?php
include "View/header.php";

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
            include "View/Client/register.php";
            break;
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
