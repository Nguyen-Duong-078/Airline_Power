<?php

$ID_user = $_SESSION['username']['User_ID'];
if (is_array($list_flOne)) {
    extract($list_flOne);
    $thue = $Price + 600000;
}
$formattedDate = date("d/m/Y", strtotime($Flight_date));
$Departure_Times = date("H:i", strtotime($Departure_Time));
$Arrival_Times = date("H:i", strtotime($Arrival_Time));
?>
<link rel="stylesheet" href="style/filght.css">
<section style="padding:30px;">
    <div class="row">
        <div class="dtc-content">
            <div class="dtc-flight">
                <ul class="dtc-step">
                    <li class="dtc-active dtc-color-theme">
                        <div class="dtc-circle-first">1</div> <span>Chọn chuyến</span>
                    </li>
                    <li class="dtc-active dtc-color-theme">
                        <div class="dtc-arrow-active"></div>
                        <div class="dtc-circle">2</div> <span>Đặt chỗ</span>
                    </li>
                    <li class="dtc-active dtc-color-theme">
                        <div class="dtc-arrow-active"></div>
                        <div class="dtc-circle">3</div> <span>Hoàn tất</span>
                    </li>
                </ul>
                <div id="dtc-flight-selected">
                    <div class="dtc-fare-wraper">
                        <div class="dtc-title dtc-color-border"><i class="fa fa-plane"></i> Chuyến bay bạn đã đặt chỗ</div>
                        <div class="dtc-box-item">
                            <div class="dtc-flight-item select" flight-type="domestic" leg="0">
                                <ul class="dtc-flight-info">
                                    <li><img src="assets/images/logo-two.png">
                                        <p>Airline Power</p>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-city"><?= $Start_City ?></div>
                                        <div class="dtc-flight-time"><?= $Departure_Times ?></div>
                                        <div class="dtc-flight-date"><?= $formattedDate ?></div>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-numb dtc-color-text"> <i class="fa fa-plane"></i><?= $Flight_Number ?></div>
                                        <div class="dtc-flight-line">
                                            <div class="dtc-flight-fly dtc-line"></div>
                                        </div> <a class="dtc-flight-detail dtc-color-focus" data-toggle="collapse" data-target="#<?= $Flight_Number ?>">Chi tiết</a>
                                    </li>
                                    <li>
                                        <div class="dtc-flight-city"><?= $Arrival_City ?></div>
                                        <div class="dtc-flight-time"><?= $Arrival_Times ?></div>
                                        <div class="dtc-flight-date"><?= $formattedDate ?></div>
                                    </li>
                                    <li>
                                        <a href="index.php?action=search_flight">
                                            <button type="button" class="dtc-btn-return dtc-color-button">Chọn lại</button>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="dtc-flight-info-mobile">
                                    <li><img src="assets/images/logo-two.png"></li>
                                    <li>
                                        <div class="dtc-flight-price"><?= $Price ?> <span>VND</span></div>
                                    </li>
                                </ul>
                                <div class="collapse" id="<?= $Flight_Number ?>">
                                    <div class="dtc-box-item">
                                        <p><i class="fa fa-info-circle" aria-hidden="true"></i> Chi tiết chuyến bay</p>
                                        <ul class="dtc-box-item-flight">
                                            <li><img src="assets/images/logo-two.png">
                                                <p>Airline Power</p>
                                            </li>
                                            <li>
                                                <span>
                                                    <b>Hà Nội - HAN</b>
                                                </span>
                                                <span>
                                                    <i>Sân bay Nội Bài</i>
                                                </span>
                                                <span>Cất cánh: <b><?= $Departure_Times ?></b>
                                                </span>
                                                <span>Ngày: <b><?= $formattedDate ?></b>
                                                </span>
                                            </li>
                                            <li>
                                                <span>
                                                    <b>Hồ Chí Minh - SGN</b>
                                                </span>
                                                <span>
                                                    <i>Sân bay Tân Sơn Nhất </i>
                                                </span>
                                                <span>Hạ cánh: <b><?= $Arrival_Times ?></b>
                                                </span>
                                                <span>Ngày: <b><?= $formattedDate ?></b>
                                                </span>
                                            </li>
                                            <li>
                                                <span>Chuyến bay: <b><?= $Flight_Number ?></b>
                                                </span>
                                                <span>Thời gian bay:<b> <?= $Flight_time ?></b>
                                                </span>

                                                <span>FareBasic:<b> <?= $Price ?></b>
                                                </span>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dtc-box-item">
                                        <p><i class="fa fa-eye" aria-hidden="true"></i> Chi tiết giá vé</p>
                                        <ul class="dtc-box-item-fare">
                                            <li><b>Hành khách</b></li>
                                            <li><b>Số lượng</b></li>
                                            <li><b>Giá vé</b></li>
                                            <li><b>Thuế và phí</b></li>
                                            <li><b>Tổng tiền</b></li>
                                        </ul>
                                        <ul class="dtc-box-item-fare">
                                            <li>Người lớn</li>
                                            <li>1</li>
                                            <li><?= $Price ?></li>
                                            <li>600000</li>
                                            <li><?= $thue ?></li>
                                        </ul>
                                        <ul class="dtc-box-item-fare dtc-total">
                                            <li><b>Tổng chi phí (VND):</b></li>
                                            <li><b><?= $thue ?></b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dtc-fare-wraper" id="dtc-pax-info">
                        <div class="dtc-title dtc-color-border"><i class="fa-brands fa-paypal" aria-hidden="true"></i> Phương Thức Thanh Toán</div>
                        <div class="dtc-box-option">
                            <ul class="dtc-pax-infos">
                                <li>
                                    <style>
                                        .btn {
                                            display: flex;
                                            gap: 10px;
                                            width: 400px;
                                        }

                                        .btn input {
                                            border-radius: 3px;
                                        }
                                    </style>
                                    <form action="index.php?action=pay_code" method="post">
                                        <div class="btn">
                                            <button onclick="confirmPayment()" type="button" class="btn btn-primary" name="monny">Thanh Toán Tiền Mặt</button>
                                            <input onclick="confirmPayment_vnpay()" class="btn btn-info" type="submit" name="redirect" value="Thanh Toán VNPAY">
                                            <input type="hidden" name="price" value="<?= $thue ?>">
                                        </div>
                                    </form>
<<<<<<< Updated upstream
=======
                                    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="view/momo_pay.php">
                                    <input class="btn btn-info" type="submit" name="payUrl" value="Thanh Toán QR Momo">
                                    <input type="hidden" name="price" value="<?= $thue ?>">
                                    <!--  -->
                                    </form>
                                    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="view/momo_pay_atm.php">
                                    <input class="btn btn-info" type="submit" name="payUrl" value="Thanh Toán ATM Momo">
                                    <input type="hidden" name="price" value="<?= $thue ?>">
                                    </form>
>>>>>>> Stashed changes
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dtc-container dtc-mob">
            <div id="dtc-box-wraper">
                <div id="dtc-base-cart" class="dtc-box-temp dtc-mob" style="display: block;">
                    <div class="dtc-base-header dtc-color-theme"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Chuyến bay của bạn</span></div>
                    <div class="dtc-base-content">
                        <ul>
                            <li> <span><?= $Start_City ?> <i class="fa fa-long-arrow-right"></i> <?= $Arrival_City ?></span> <span class="dtc-cart-time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?= $Departure_Times ?>-<?= $formattedDate ?></span></li>
                        </ul>
                        <ul class="dtc-cart-sumary">
                            <li>
                                <span>Tóm tắt giá vé</span>
                                <span class="dtc-align-right">Tổng</span>
                            </li>
                            <li>
                                <span class="dtc-cart-people">Người lớn</span>
                                <span class="dtc-cart-quanlity">1 x <?= $thue ?></span>
                                <span class="dtc-cart-price"><?= $thue ?></span>
                            </li>
                            <li>
                                ∑ <span class="dtc-cart-summary-title"> Tổng giá (VND):</span>
                                <span class="dtc-cart-total"><?= $thue ?></span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    function confirmPayment_vnpay() {
        // Hiển thị thông báo xác nhận
        Swal.fire({
            title: 'Xác nhận thanh toán',
            text: 'Bạn chắc chắn muốn thanh toán chứ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'view/Vnpay.php';
            }
        });
    }

    function confirmPayment() {
        // Hiển thị thông báo xác nhận
        Swal.fire({
            title: 'Xác nhận thanh toán',
            text: 'Bạn chắc chắn muốn thanh toán chứ?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Đồng ý',
            cancelButtonText: 'Hủy bỏ'
        }).then((result) => {
            if (result.isConfirmed) {
                // Nếu người dùng đồng ý, chuyển hướng đến trang thanh toán
                window.location.href = 'view/noti_pay.php';
            }
        });
    }
</script>