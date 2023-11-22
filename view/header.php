<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Airlines Power</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="image/logo-may-bay-17.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="preloader"></div>
    <div class="page-wrapper">
        <header class="header-section header-section-one header--style">
            <div class="header">
                <div class="header-bottom-area">
                    <div class="container-fluid">
                        <div class="header-menu-content">
                            <nav class="navbar navbar-expand-lg p-0">
                                <a class="site-logo site-title" href="index.php"><img src="assets/images/logo.png" alt="site-logo"></a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav main-menu ml-auto">
                                        <li class="menu_has_children"><a href="index.php">Trang Chủ</a>
                                        </li>
                                        <li class="menu_has_children"><a href="index.php?action=blog">Blog</a>
                                        </li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="index.php?action=contact">Liên Hệ</a></li>
                                    </ul>
                                    <div class="header-right">
                                        <?php
                                        if (isset($_SESSION['username'])) {
                                            extract($_SESSION['username']);
                                        ?>
                                            <div class="header-action-area">
                                                <a href="index.php?action=logout" class="action-btn two"><i class="fa-solid fa-user-shield"></i></a>
                                                <div class="header-action">
                                                    <a href="#"><i class="fa-solid fa-user-shield"></i> <?= $User ?></a>
                                                    <a href="index.php?action=logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="header-action-area">
                                                <a href="index.php?action=login" class="action-btn two"><i class="fa-solid fa-user-shield"></i></a>
                                                <div class="header-action">
                                                    <a href="index.php?action=login"><i class="fa-solid fa-user-shield"></i> Tài Khoản</a>
                                                </div>
                                            </div>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--End Header-->