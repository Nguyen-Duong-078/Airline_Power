<?php
if (is_array($listbook)) {
    extract($listbook);
}
if (is_array($list_account)) {
    extract($list_account);
}
?>
<!-- APP CSS -->
<link rel="stylesheet" type="text/css" href="../style/app.css">
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <h6 class="card-title mb-0">NHỮNG KHÁCH HÀNG MỚI</h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-12 col-xl-5">
                                                    <h3 style="font-size: calc(1.275rem + .3vw);" class="mb-2">3,897</h3>
                                                    <div class="d-flex align-items-baseline">
                                                        <p style="margin-bottom: 0; margin-top: 0;" class="text-success">
                                                            <span>+3.3%</span>
                                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-12 col-xl-7">
                                                    <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <h6 class="card-title mb-0">VÉ MỚI</h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-12 col-xl-5">
                                                    <h3 style="font-size: calc(1.275rem + .3vw);" class="mb-2">5,084</h3>
                                                    <div class="d-flex align-items-baseline">
                                                        <p style="margin-bottom: 0; margin-top: 0;" class="text-danger">
                                                            <span>-2.8%</span>
                                                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-12 col-xl-7">
                                                    <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-baseline">
                                                <h6 class="card-title mb-0">SỰ PHÁT TRIỂN</h6>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-md-12 col-xl-5">
                                                    <h3 style="font-size: calc(1.275rem + .3vw);" class="mb-2">89.87%</h3>
                                                    <div class="d-flex align-items-baseline">
                                                        <p style="margin-bottom: 0; margin-top: 0;" class="text-success">
                                                            <span>+2.8%</span>
                                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-12 col-xl-7">
                                                    <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-12 col-xl-12 grid-margin stretch-card">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row align-items-start mb-2">
                                        <div class="col-md-7">
                                            <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                                <h6 class="card-title mb-0" style="font-weight: bold;">DOANH THU</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-5 d-flex justify-content-md-end">
                                            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-primary">Today</button>
                                                <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>
                                                <button type="button" class="btn btn-primary">Month</button>
                                                <button type="button" class="btn btn-outline-primary">Year</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="revenueChart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="row">
                        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                                        <h6 class="card-title mb-0">THÁNG GIẢM GIÁ</h6>
                                    </div>
                                    <div id="monthlySalesChart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                                        <h6 class="card-title mb-0">Lưu trữ đám mây</h6>
                                    </div>
                                    <div id="storageChart"></div>
                                    <div class="row mb-3">
                                        <div class="col-6 d-flex justify-content-end">
                                            <div>
                                                <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Tổng dung lượng <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                                                <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Đã sử dụng</label>
                                                <h5 class="fw-bolder mb-0">~5TB</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Nâng cấp bộ nhớ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                                        <h6 class="card-title mb-0" style="font-weight: bold;">Khách hàng mới</h6>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <?php
                                        foreach ($list_account as $account) :
                                            extract($account);
                                        ?>
                                            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
                                                <div class="me-3">
                                                    <!-- <img src="assets/images/faces/face6.jpg" class="rounded-circle wd-35" alt="user"> -->
                                                </div>
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-between">
                                                        <h6 class="fw-normal text-body mb-1"><?= $FullName ?></h6>
                                                        <p style="margin-bottom: 0; margin-top: 0;" class="text-muted tx-15">
                                                            <?php
                                                            switch ($account['role']) {
                                                                case '1':
                                                                    echo "<span class='badge bg-primary'> Admin</span><br>";
                                                                    break;
                                                                case '2':
                                                                    echo "<span class='badge bg-warning'>Nhân Viên</span><br>";
                                                                    break;
                                                                case '0':
                                                                    echo "<span class='badge bg-danger'>Khách Hàng</span><br>";
                                                                    break;
                                                                default:
                                                                    echo "Trạng thái không xác định<br>";
                                                                    break;
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <p style="margin-bottom: 0; margin-top: 0;" class="text-muted tx-13"><?= $Email ?></p>
                                                </div>
                                            </a>
                                        <?php endforeach ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                                        <h6 class="card-title mb-0">Danh sách vé đã đặt</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="pt-0">#</th>
                                                    <th class="pt-0">Họ và Tên</th>
                                                    <th class="pt-0">Chuyến Bay</th>
                                                    <th class="pt-0">Ngày Đặt</th>
                                                    <th class="pt-0">Thanh Toán</th>
                                                    <th class="pt-0">Trạng Thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($listbook as $Book) :
                                                    extract($Book);
                                                    $Booking_Dates = date("d/m/Y", strtotime($Booking_Date));
                                                ?>
                                                    <tr>
                                                        <td><?= $Booking_ID ?></td>
                                                        <td><?= $Name ?></td>
                                                        <td><?= $Flight_ID ?></td>
                                                        <td><?= $Booking_Dates ?></td>
                                                        <td style="font-weight: bold;"><?= $Pay ?></td>
                                                        <td>
                                                            <?php
                                                            switch ($Book['Check_InFL']) {
                                                                case 'Check-in':
                                                                    echo "<span class='badge bg-primary'>$Check_InFL</span><br>";
                                                                    break;
                                                                case 'Chưa check in':
                                                                    echo "<span class='badge bg-warning'>$Check_InFL</span><br>";
                                                                    break;
                                                                case 'Hủy':
                                                                    echo "<span class='badge bg-danger'>$Check_InFL</span><br>";
                                                                    break;
                                                                default:
                                                                    echo "Trạng thái không xác định<br>";
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
            </div>
        </div>
    </div>
    <div class="conten_admin" style="margin-top: 20px; margin-bottom: -45px;">
        <div class="sivers">
            © 2023 <strong>Airline Power</strong> hệ thống được phát triển và vận hành bởi <strong>Airline Power</strong>
        </div>
    </div>
</main>