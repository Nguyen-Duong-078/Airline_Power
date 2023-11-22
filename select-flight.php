<form class="book-form" action="search.php" method="post">
    <div class="row justify-content-center mb-20-none">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
            <div class="book-select">
                <label>Điểm khởi hành</label>
                <div class="book-form-icon">
                    <i class="icon-from-airplane"></i>
                </div>
                <input class="book-select form--control" type="text" name="Start_City" placeholder="Điểm khởi hành" required>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
            <div class="book-select">
                <label>Điểm đến</label>
                <div class="book-form-icon">
                    <i class="icon-to-airplane"></i>
                </div>
                <input class="book-select form--control" type="text" name="Arrival_City" placeholder="Điểm đến" required>
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