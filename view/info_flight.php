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
<?php
if (isset($_POST['book']) && ($_POST['book'])) {
    $Flight_Number = $_POST['Flight_IDs'];
    $ID_User = $_POST['User_ID'];
    $CCCD = $_POST['cccd'];
    $birth = $_POST['birth'];
    $Booking_Date = date('H:i d/m/Y');
    $Total_Price = $_POST['Price'];
    $Seat_Number = $_POST['seats'];
    $Ticket = $_POST['Ticker'];
    insert_book($Flight_Number, $User_ID, $CCCD, $birth, $Booking_Date, $Total_Price, $Seat_Number, $Ticket);
    header("location: index.php?action=payment&Flight=" . $Flight_Number);
}
?>
<link rel="stylesheet" href="style/filght.css">
<section style="padding:30px;">
    <div class="row">
        <div class="dtc-content">
            <form action="index.php?action=book_flight&Flight=<?= $Flight_Number ?>" method="post">
                <div class="dtc-flight">
                    <ul class="dtc-step">
                        <li class="dtc-active dtc-color-theme">
                            <div class="dtc-circle-first">1</div> <span>Chọn chuyến</span>
                        </li>
                        <li class="dtc-active dtc-color-theme">
                            <div class="dtc-arrow-active"></div>
                            <div class="dtc-circle">2</div> <span>Đặt chỗ</span>
                        </li>
                        <li>
                            <div class="dtc-arrow-active"></div>
                            <div class="dtc-circle">3</div> <span>Hoàn tất</span>
                        </li>
                    </ul>
                    <div id="dtc-flight-selected">
                        <div class="dtc-fare-wraper">
                            <div class="dtc-title dtc-color-border"><i class="fa fa-plane"></i> Chuyến bay bạn đã lựa chọn</div>
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
                                            <div class="dtc-flight-price">2,485,200 <span>VND</span></div>
                                        </li>
                                        <li>
                                            <a href="index.php?action=search_flight">
                                                <button type="button" class="dtc-btn-return dtc-color-button">Chọn lại</button>
                                            </a>
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
                                                    <!-- <span>Máy bay: <b></b>
                                                </span> -->
                                                    <span>Hành lý xách tay:<b> 7kg</b>
                                                    </span>
                                                    <span>Hành lý ký gửi:<b> 0 Kg</b>
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
                            <div class="dtc-title dtc-color-border"><i class="fa fa-users" aria-hidden="true"></i> Thông tin khách hàng</div>
                            <div class="dtc-box-option">
                                <ul class="dtc-pax-info">
                                    <li>
                                        <div class="dtc-pax-customer dtc-pax-cus">Khách hàng</div>
                                        <div class="dtc-pax-customer dtc-pax-sex">Giới tính <span class="dtc-required">*</span></div>
                                        <div class="dtc-pax-customer dtc-pax-firstname">Họ Tên<span class="dtc-required">*</span></div>
                                        <div class="dtc-pax-customer dtc-pax-lastname">Số CCCD <span class="dtc-required">*</span></div>
                                        <div class="dtc-pax-customer dtc-pax-bir">Ngày sinh <span class="dtc-required">*</span></div>
                                    </li>
                                    <li type="adt" value="1">
                                        <div class="dtc-pax-row">
                                            <div class="dtc-pax-customer dtc-pax-cus adt">Người lớn</div>
                                            <div class="dtc-pax-customer dtc-pax-sex">
                                                <div class="dtc-input-group">
                                                    <select class="dtc-input dtc-input-gender">
                                                        <option class="option">Nam</option>
                                                        <option class="option">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="dtc-pax-customer dtc-pax-firstname">
                                                <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-firstname" name="name" type="text" maxlength="160" placeholder="Nhập Họ Tên" required> </div>
                                            </div>
                                            <div class="dtc-pax-customer dtc-pax-lastname">
                                                <div class="dtc-input-group"> <input class="dtc-input dtc-req dtc-input-lastname" name="cccd" type="text" maxlength="160" placeholder="Số CCCD" required> </div>
                                            </div>
                                            <div class="dtc-pax-customer dtc-pax-bir">
                                                <div class="dtc-input-group"> <input name="birth" class="dtc-input dtc-picker-adt" placeholder="dd-MM-yyyy" type="date" autocomplete="off" required> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dtc-fare-wraper" id="dtc-pax-info">
                            <div class="dtc-title dtc-color-border"><i class="fa fa-users" aria-hidden="true"></i> Chọn Vé</div>
                            <div class="dtc-box-option">
                                <select name="Ticker" style="padding: 10px;">
                                    <?php
                                    foreach ($list_type_ticket as $ticket) {
                                        extract($ticket);
                                        echo '<option value="' . $Ticket_name . '">' . $Ticket_name . '</option>';
                                    }
                                    ?>
                                </select>
                                <br>
                            </div>
                        </div>
                        <div class="dtc-fare-wraper" id="dtc-contact">
                            <div class="dtc-footer">
                                <div class="dtc-fare-back">
                                    <button type="button" class="dtc-btn-back dtc-color-button">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        <a href="index.php?action=search_flight">
                                            <span> Quay lại</span>
                                        </a>
                                    </button>
                                </div>
                                <div class="dtc-fare-booking">
                                    <input class="dtc-btn-booking dtc-color-button" type="submit" name="book" value="Đặt Chỗ">
                                    <input type="hidden" name="User_ID" value="<?= $ID_user ?>">
                                    <input type="hidden" name="Flight_IDs" value="<?= $Flight_Number ?>">
                                    <input type="hidden" name="Price" value="<?= $thue ?>">
                                    <input type="hidden" name="seats" value="<?= $seat ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                <div id="dtc-base-cart" class="dtc-box-temp dtc-mob">
                    <div class="dtc-base-header dtc-color-theme"><i class="fa-solid fa-gears" aria-hidden="true"></i> <span>Chọn chỗ</span></div>
                    <div class="dtc-base-content">
                        <div class="grid-container">
                            <?php
                            foreach ($seats as $seat) {
                                extract($seat);
                                // Kiểm tra trạng thái ghế và hiển thị nút đặt hoặc hủy
                                if ($seat['status'] == 'available') {
                                    echo "<form method='post'>";
                                    echo "<input type='hidden' name='seat' value='$Seat_number'>";
                                    echo "<input type='hidden' name='action' value='book'>";
                                    echo "<button type='submit'></button>";
                                    echo "</form>";
                                } elseif ($seat['status'] == 'booked' && checkSeatAvailability($seat['Seat_number'], $conn, false)) {
                                    echo "<form method='post'>";
                                    echo "<input type='hidden' name='seat' value='$Seat_number'>";
                                    echo "<input type='hidden' name='action' value='cancel'>";
                                    echo "<button class='huy' type='submit'></button>";
                                    echo "</form>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="dtc-base-cart" class="dtc-box-temp dtc-mob">
                    <div class="dtc-base-header dtc-color-theme"><i class="fa-solid fa-gears" aria-hidden="true"></i> <span>Ghế đã chọn</span></div>
                    <div class="dtc-base-content">
                        <div class="text-center" style="padding: 10px;">
                            <?php
                            // Lấy danh sách các ghế đã chọn của người dùng hiện tại
                            $bookedSeats = getBookedSeats($_SESSION['User_ID'], $conn);
                            if (!empty($bookedSeats)) {
                                foreach ($bookedSeats as $seat) {
                                    echo "<strong>Ghế bạn đã chọn: $seat</strong>";
                                }
                            } else {
                                echo "<strong>Chưa có ghế nào được chọn.</strong>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>