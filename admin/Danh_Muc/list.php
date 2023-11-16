<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <!-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> -->
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <h3>Trang Quản Trị</h3>
            <form action="index.php?act=out" class="rows">
                <a class="app-nav__item" href="../index.php">
                    Thoát <i class='bx bx-log-out bx-rotate-180'></i>
                </a>
            </form>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../image/Shipper_CPS3.77d4065.png" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>Nguyễn Văn Dương</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="index.php">
                    <i class='app-menu__icon bx bxs-home'></i>
                    <span class="app-menu__label">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item active" href="index.php?act=add_flight">
                    <i class='app-menu__icon bx bxs-rocket'></i>
                    <span class="app-menu__label">Chuyến Bay</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_sp">
                    <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
                    <span class="app-menu__label">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=list_client">
                    <i class='app-menu__icon bx bx-user-voice'></i>
                    <span class="app-menu__label">Khách hàng</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=statistical">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Thống kê</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bx bx-chat'></i>
                    <span class="app-menu__label">Comment</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Danh sách chuyến bay</h3>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>Flight_ID</th>
                                    <th>Số chuyến bay</th>
                                    <th>Khởi Hành</th>
                                    <th>Điểm Đến</th>
                                    <th>Giờ khởi hành</th>
                                    <th>Thời gian đến</th>
                                    <th>Giá</th>
                                    <th>Thời gian bay</th>
                                    <th>Tính năng</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($list_flight as $flight) {
                                extract($flight);
                                $sua_flight = "index.php?act=sua_flight&id=" . $Flight_ID;
                                $delete_flight = "index.php?act=delete_flight&id=" . $Flight_ID;
                                echo '<tr>
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Flight_Number . '</td>
                                    <td>' . $Start_City . '</td>
                                    <td>' . $Arrival_City . '</td>
                                    <td>' . $Departure_Time . '</td>
                                    <td>' . $Arrival_Time . '</td>
                                    <td>' . $Price . '</td>
                                    <td>' . $Flight_time . '</td>
                                    <td>
                                    <a href="' . $sua_flight . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="#" class= "delete-btn" data-id=' . $Flight_ID . ' ><input class="btn btn-primary btn-sm edit" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                    <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                    <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                    <a href="index.php?act=add_flight"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
                </div>
            </div>
        </div>
    </main>

    <!-- THÔNG BÁO KHI CLICK XÓA -->
    <script src="../javascript/SweetAlert.js"></script>
</body>

</html>