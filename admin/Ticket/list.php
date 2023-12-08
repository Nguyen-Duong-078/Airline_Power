<<<<<<< Updated upstream
   <main class="app-content">
       <div class="row">
           <div class="col-md-12">
               <div class="tile">
                   <h3 class="tile-title">Ticket</h3>
                   <div class="tile-body">
                       <table class="table table-hover table-bordered" id="sampleTable">
                           <thead>
                               <tr>
                                   <th>Ticket_ID</th>
                                   <th>Ticket_name</th>
                                   <th>Status</th>
                                   <th>Ticket_number</th>
                                   <th>Flights_Tick</th>
                                   <th>Chức Năng</th>
                               </tr>
                           </thead>
                           <?php
                            foreach ($list_type_ticket as $type_ticket) {
                                extract($type_ticket);
                                $sua_type_ticket = "index.php?act=sua_type_ticket&id=" . $Ticket_ID;
                                $delete_type_ticket = "index.php?act=delete_type_ticket&id=" . $Ticket_ID;
                                echo '<tr>
                                    <td>' . $Ticket_ID . '</td>
                                    <td>' . $Ticket_name . '</td>
                                    <td>' . $Status . '</td>
                                    <td>' . $Ticket_number . '</td>
                                    <td>' . $Flights_Tick . '</td>
                                    <td>
                                    <a href="' . $sua_type_ticket . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_type_ticket . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
=======
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
                <a class="app-menu__item" href="index.php?act=add_voucher">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Voucher</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_type_ticket">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Type_ticket</span>
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
                    <h3 class="tile-title">Type_ticket</h3>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th></th>
                                    <th>Ticket_name</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($list_type_ticket as $type_ticket) {
                                extract($type_ticket);
                                $sua_type_ticket = "index.php?act=sua_type_ticket&id=" . $Ticket_ID ;
                                $delete_type_ticket = "index.php?act=delete_type_ticket&id=" .$Ticket_ID ;
                                echo '<tr>
                                    <td></td>
                                    <td>'.$Ticket_name.'</td>
                                    <td>'.$Status.'</td>
                                    <td>
                                    <a href="' . $sua_type_ticket . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_type_ticket . '"><input class="btn btn-primary btn-sm trash" type="button" value="Xóa"></a>
>>>>>>> Stashed changes
                                    </td>
                                    </tr>';
                            }
                            ?>
<<<<<<< Updated upstream
                       </table>
                   </div>
                   <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                   <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                   <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                   <a href="index.php?act=add_type_ticket"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
               </div>
           </div>
       </div>
   </main>
=======
                        </table>
                    </div>
                    <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                    <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                    <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                    <a href="index.php?act=add_type_ticket"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
                </div>
            </div>
        </div>
    </main>

    <!-- THÔNG BÁO KHI CLICK XÓA -->
    <script src="../javascript/SweetAlert.js"></script>
</body>

</html>
>>>>>>> Stashed changes
