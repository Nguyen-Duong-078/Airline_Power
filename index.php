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
