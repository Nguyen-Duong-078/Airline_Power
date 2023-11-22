<<<<<<< Updated upstream
<section class="book-form-section ptb-120">
    <div class="container">
        <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="section-header white">
                        <span class="sub-title text-white"><span>Airline</span> Book</span>
                        <h2 class="section-title">Đặt chuyến bay cá nhân</h2>
                    </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======
<style>
    table {
        width: 100%;
        text-align: center;
    }

    thead th {
        padding: 10px;
        background: red;
    }

    tr td {
        padding: 10px;
        border: 1px solid #C0C0C0;
    }

    .flight h3,
    .flight h4 {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
    }

    .flight h4 {
        color: red;
    }

    .flight strong {
        color: black;
    }

    .book {
        background: linear-gradient(26.73deg, #F9A51A 13.7%, #FBB612 29.8%, #FFDD00 66.81%);
        padding: 5px 15px;
        border-radius: 8px;
        font-weight: bold;
    }

    .book:hover {
        background: linear-gradient(100deg, #fa5b7d, #6882fa);
        color: #fff;
    }
</style>
<section class="account-section bg--gray ptb-40">
    <div class="row justify-content-center">
        <div class="">
            <div class="section-header flight">
                <h3 class="section-title">Kết quả tìm kiếm chuyến bay</h3> <br>
                <h4><?= $Start_City ?> <strong>➥</strong> <?= $Arrival_City ?> </h4>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Flight_Number</th>
                <th>Start_City</th>
                <th>Arrival_City</th>
                <th>Departure_Time</th>
                <th>Arrival_Time</th>
                <th>Price</th>
                <th>Đặt Chuyến</th>
            </tr>
        </thead>

        <?php
        foreach ($search_flight as $flight) {
            extract($flight);
            echo '<tr>
           <td>' . $Flight_Number . '</td>
           <td>' . $Start_City . '</td>
           <td>' . $Arrival_City . '</td> 
           <td>' . $Departure_Time . '</td>
           <td>' . $Arrival_Time . '</td>
           <td>' . $Price . '</td>
           <td> <a href="index.php?action=book&ID=' . $Flight_ID . '" class="book">Chọn</a></td>
                 </tr>';
        }
        ?>
    </table>
>>>>>>> Stashed changes
</section>