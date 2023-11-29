<link rel="stylesheet" href="style/search_flight.css">
<section class="account-section bg--gray" style="padding:30px;">
    <div class="row">
        <div class="col-8 text-center">
            <ul class="dtc-step">
                <li class="dtc-active dtc-color-theme">
                    <div class="dtc-circle-first">1</div> <span>Chọn chuyến bay</span>
                </li>
                <li>
                    <div class="dtc-arrow-active"></div>
                    <div class="dtc-circle">2</div> <span>Đặt chỗ</span>
                </li>
                <li>
                    <div class="dtc-arrow"></div>
                    <div class="dtc-circle">3</div> <span>Hoàn tất</span>
                </li>
            </ul>
            <!-- <i class="fa-solid fa-plane-departure fa-beat" style="color:red"></i> -->
            <h4 style="color:red"><?= $Start_City ?> <strong style="color:#000">➥</strong> <?= $Arrival_City ?> </h4>
            <?php
            if ($Flight_date != "") {
                echo "<strong>$formattedDate</strong>";
            }
            ?>
            <h4></h4>
        </div>
        <div class="col-8">
            <ul class="dtc-box-sort">
                <li sort-value="airline"><span class="hang">Hãng</span></li>
                <li sort-value="timeup"><span class="tm">Giờ bay</span></li>
                <li sort-value="totaltime"><span class="fullh">Tổng giờ</span></li>
                <li sort-value="timedown"><span class="gh">Giờ hạ</span></li>
                <li sort-value="timedown"><span class="gh">Vé</span></li>
                <li sort-value="price"><span class="pr">Giá</span></li>
                <li></li>
            </ul>
            <?php
            foreach ($search_flight as $flight) {
                extract($flight);
                $Departure_Times = date("H:i", strtotime($Departure_Time));
                $Arrival_Times = date("H:i", strtotime($Arrival_Time));
                $thue = $Price + 600000;
                echo '
                <div class="dtc-flight-main">
                <div class="dtc-flight-item">
                    <ul class="dtc-flight-info">
                        <li><img src="assets/images/logo-two.png">
                            <p>Airline Power</p>
                        </li>
                        <li>
                            <div class="dtc-flight-city">' . $Start_City . '</div>
                            <div class="dtc-flight-time">' . $Departure_Times . '</div>
                        </li>
                        <li>
                            <div class="dtc-flight-numb dtc-color-text"> <i class="fa fa-plane"></i>' . $Flight_Number . '</div>
                            <div class="dtc-flight-line">
                                <div class="dtc-flight-fly dtc-line"></div>
                            </div> <a class="dtc-flight-detail dtc-color-focus" data-toggle="collapse" data-target="#' . $Flight_Number . '">Chi tiết</a>
                        </li>
                        <li>
                            <div class="dtc-flight-city">' . $Arrival_City . '</div>
                            <div class="dtc-flight-time">' . $Arrival_Times . '</div>
                        </li>
                        <li>
                            <div class="dtc-flight-price">' . $thue . '<span>VND</span><br></div>
                            <a href="index.php?action=book_flight&Filght=' . $Flight_Number . '">
                            <button type="button" class="dtc-color-button">Chọn</button>
                            </a>
                        </li>
                    </ul>
                    <ul class="dtc-flight-info-mobile">
                        <li><img src="assets/images/logo-two.png"> </li>
                        <li>
                            <div class="dtc-flight-price">' . $Price . '<span>VND</span></div>
                        </li>
                        <li> <button type="button" class="dtc-color-button">Chọn</button> </li>
                    </ul>
                    <div class="collapse" id="' . $Flight_Number . '">
                    <div class="dtc-box-item">
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i> Chi tiết chuyến bay</p>
                        <ul class="dtc-box-item-flight">
                            <li><img src="assets/images/logo-two.png">
                                <p>Airline Power</p>
                            </li>
                            <li> <span><b>Hà Nội - HAN</b></span> <span><i>Sân bay Nội Bài</i></span> <span>Cất cánh: <b> 20:50</b></span> <span>Ngày: <b>25-11-2023</b></span> </li>
                            <li> <span><b>Hồ Chí Minh - SGN</b></span> <span><i>Sân bay Tân Sơn Nhất </i></span> <span>Hạ cánh: <b> 23:05</b></span> <span>Ngày: <b>25-11-2023</b></span> </li>
                            <li> <span>Chuyến bay: <b>' . $Flight_Number . '</b></span> <span>Thời gian bay:<b> ' . $Flight_time . '</b></span> <span>Hạng chỗ:<b> K1_ECO</b></span> <span>FareBasic:<b> </b></span> <span>Máy bay: <b></b></span> <span>Hành lý xách tay:<b> 7kg</b></span> <span>Hành lý ký gửi:<b> 0 Kg</b></span> </li>
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
                            <li>' . $Price . '</li>
                            <li>600000</li>
                            <li>' . $thue . '</li>
                        </ul>
                        <ul class="dtc-box-item-fare dtc-total">
                            <li><b>Tổng chi phí (VND):</b></li>
                            <li><b>' . $thue . '</b></li>
                        </ul>
                    </div>
                  </div>
                 </div>
               </div>';
            }
            ?>
        </div>
        <!-- <div class="col-4">
            <div class="containers">
                <h3 class="mb-4">Chọn Vé</h3>
                <form action="#" method="post">
                    <select class="form-select" aria-label="Default select example" name="Ticker">
                        <?php
                        foreach ($list_type_ticket as $ticket) {
                            extract($ticket);
                            echo '<option value="' . $Ticket_ID . '">' . $Ticket_name . '</option>';
                        }
                        ?>
                    </select>
                </form>
            </div>
        </div> -->
    </div>
    <script>
        // Bật/tắt trường nhập liệu Ngày Trở Về dựa vào trạng thái của hộp kiểm "Chuyến đi khứ hồi"
        document.getElementById('round-trip').addEventListener('change', function() {
            document.getElementById('return-date').disabled = !this.checked;
        });

        // Bật/tắt trường nhập liệu Ngày Trở Về dựa vào trạng thái của hộp kiểm "Chuyến đi một chiều"
        document.getElementById('one-way').addEventListener('change', function() {
            document.getElementById('return-date').disabled = this.checked;
        });
    </script>
</section>