<section class="book-form-section ptb-120">
    <div class="container">
        <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header white">
                        <span class="sub-title text-white"><span>Airline</span> Book</span>
                        <h2 class="section-title">Đặt chuyến bay cá nhân</h2>
                    </div>
<<<<<<< Updated upstream
                    <form class="book-form" action="index.php?action=search.php" method="post">
                        <div class="row justify-content-center mb-20-none">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Điểm khởi hành</label>
                                    <div class="book-form-icon">
                                        <i class="icon-from-airplane"></i>
                                    </div>
                                    <input class="book-select form--control" type="text" name="start_flight" placeholder="Điểm khởi hành" required>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Điểm đến</label>
                                    <div class="book-form-icon">
                                        <i class="icon-to-airplane"></i>
                                    </div>
                                    <input class="book-select form--control" type="text" name="end_flight" placeholder="Điểm đến" required>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <div class="book-select">
                                    <label>Ngày đi</label>
                                    <div class="book-form-icon">
                                        <i class="icon-schedule-icon"></i>
                                    </div>
                                    <input class="book-select form--control" name="date_flight" type="date" style="color:#FFF">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                <label>Hành Khách</label>
                                <div class="book-quantity">
                                    <div class="book-plus-minus">
                                        <div class="dec qtybutton">-</div>
                                        <input class="book-plus-minus-box qty" type="text" name="qty" value="1" readonly>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 form-group">
                                <button type="submit" name="search_flight" class="btn--base ml-auto mr-auto mt-30"><i class="icon-btn-icon"></i> Tìm Chuyến Bay</button>
                            </div>
=======
                    ';
            }
            ?>
            <?php
            if(is_array($loadone_Bill)){
                extract($loadone_Bill);
            }
    
                $tong = $price + $thue_phi;
                $tong1 = $price2 + $thue_phi2;
                $tongall = $tong+$tong1;
                echo '<div class="dtc-box-item">
                <p><i class="fa fa-eye" aria-hidden="true"></i> Chi tiết giá vé</p>
                <ul class="dtc-box-item-fare">
                    <li><b>Hành khách</b></li>
                    <li><b>Số lượng</b></li>
                    <li><b>Giá vé</b></li>
                    <li><b>Thuế và phí</b></li>
                    <li><b>Tổng tiền</b></li>
                </ul>
                <ul class="dtc-box-item-fare">
                    <li>'.$User_ID.'</li>
                    <li>'.$so_luong.'</li>
                    <li>'.$price.'</li>
                    <li>'.$thue_phi.'</li>
                    <li>'.$tong.'</li>
                </ul>
                <ul class="dtc-box-item-fare">
                    <li>'.$user_id2.'</li>
                    <li>'.$so_luong2.'</li>
                    <li>'.$price2.'</li>
                    <li>'.$thue_phi2.'</li>
                    <li>'.$tong1.'</li>
                </ul>
                <ul class="dtc-box-item-fare dtc-total">
                    <li><b>Tổng chi phí (VND):</b></li>
                    <li><b>'.$tongall.'</b></li>
                </ul>
            </div>
          </div>
         </div>
       </div>';
            ?>
            
        </div>
        <div class="col-4">
            <div class="container">
                <h3 class="mb-4">Tìm Chuyến Bay</h3>
                <form action="index.php?action=search_flight" method="post">
                    <div class="form-row">
                        <div class="form-group form-check col-md-3">
                            <input type="radio" class="form-check-input" id="one-way" name="rager" checked>
                            <label class="form-check-label" for="one-way">Một Chiều</label>
>>>>>>> Stashed changes
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>