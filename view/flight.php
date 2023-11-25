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

    .dtc-result {
        width: 100%;
        position: relative;
        margin: auto;
        display: inline;
        font-size: 14px;
        font-family: Arial !important;
        color: #000 !important;
    }

    .dtc-color-theme {
        background-color: #28a745 !important;
    }

    /* step */
    ul.dtc-step {
        width: 100%;
        height: 30px;
        flex: 1 !important;
        display: flex !important;
        font-size: 13px !important;
        margin-bottom: 10px !important
    }

    ul.dtc-step li:first-child {
        text-align: center;
        width: 33.33%;
        cursor: pointer;
        color: #333;
        background-image: none;
        padding-left: 8px !important;
    }

    ul.dtc-step li {
        text-align: center;
        width: 33.33%;
        cursor: pointer;
        color: #333;
        background: #ddd url(https://plugin.datacom.vn/Resources/images/Icon/right-arrow.png) no-repeat left center;
        background-position: -8px;
        background-size: 30px;
        line-height: 30px;
        align-items: center;
        display: flex;
        margin: 0px !important;
        padding: 0px !important;
    }

    ul.dtc-step li.dtc-active {
        color: #FFF;
    }

    ul.dtc-step li span {
        padding-left: 10px;
        color: #FFF;
        font-size: 16px;
    }

    ul.dtc-step .dtc-arrow {
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #DDD;
        margin-left: -1px;
    }

    ul.dtc-step .dtc-arrow-active {
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 15px solid #28a745;
        margin-left: -1px;
    }

    ul.dtc-step .dtc-circle-first {
        width: 22px;
        height: 22px;
        line-height: 18px;
        border-radius: 50%;
        text-align: center;
        font-size: 14px;
        border: 2px solid #FFF;
        color: #FFF;
    }

    ul.dtc-step .dtc-circle {
        width: 22px;
        height: 22px;
        line-height: 18px;
        border-radius: 50%;
        text-align: center;
        font-size: 14px;
        border: 2px solid #FFF;
        color: #FFF;
        margin-left: 15px;
    }

    .container {
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
        border-radius: 5px;
        margin-top: -70.7px;
    }

    .container h3 {
        text-align: center;
        background: #28a745;
        padding: 10px;
        margin-left: -15px;
        margin-right: -15px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        color: #fff;
    }

    .form-check-input {
        margin-top: 7px;
        font-size: 25px;
        margin-left: 32px;
    }

    .form-check-label,
    .form-check-input {
        cursor: pointer;
    }

    .form-group label {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        font-size: 16px;
    }

    .form-group .btn {
        padding: 10px;
        margin-left: 155px;
        border-radius: 10px;
        font-weight: bold;
    }

    .dtc-color-focus {
        color: #fc7700 !important;
    }

    .dtc-color-focus:hover {
        color: #28a745 !important;
    }

    .dtc-color-text {
        color: #28a745;
    }

    .dtc-color-button {
        background-color: #00A94F !important;
    }

    .dtc-color-button:hover {
        background-color: #fc7700 !important;
    }

    .dtc-flight-info .dtc-radio-mark::after {
        background: #28a745;
    }

    #dtc-focus-return i,
    #dtc-focus-departure i {
        font-size: 30px !important;
    }

    #dtc-flight-return {
        padding-top: 20px;
    }

    ul.dtc-flight-date {
        min-height: 50px;
        position: relative;
        width: 100%;
        margin: 0px;
        padding: 0px;
        list-style-type: none !important;
        display: flex !important;
        background: #FFF none repeat scroll 0 0;
        border-bottom: 0.5px solid #eee;
    }

    ul.dtc-flight-date li {
        width: 100%;
        text-align: center;
        border-left: 0.5px solid #ccc;
        display: grid;
        margin: 0px;
        padding: 5px 0px 0px 0px;
        cursor: pointer;
    }

    ul.dtc-flight-date li:first-child {
        border-left: 0.5px solid #eee;
    }

    ul.dtc-flight-date li:last-child {
        border-right: 0.5px solid #eee;
    }

    ul.dtc-flight-date li span {
        font-size: 12px;
    }

    ul.dtc-flight-date li.dtc-date-active {
        background-color: #eee;
    }

    .dtc-flight-item {
        position: relative;
        padding: 0px !important;
        margin: 8px 0px;
        align-items: center;
        background-color: #FFF;
        border: 0.5px solid #eee;
    }

    .dtc-flight-item.select {
        margin-top: 10px !important;
    }

    .dtc-flight-wraper {
        display: flex;
        width: 100%;
        align-items: center;
    }

    .dtc-flight-item:hover,
    .dtc-flight-fare:hover {
        background-color: #f7f7f7;
    }

    .dtc-flight-info img {
        max-height: 30px;
        max-width: 80px;
        margin: 0px 10px;
    }

    .dtc-flight-info.select {
        margin-top: 10px;
        border: 1px solid #f5f5f5;
        -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
    }

    .dtc-flight-city {
        margin: 0px !important;
        font-weight: 500 !important;
        font-size: 14px !important;
        color: #333;
    }

    .dtc-flight-city span {
        padding-left: 6px;
        color: #B1B1B1 !important;
        font-weight: 500 !important;
    }

    .dtc-flight-time {
        font-size: 24px !important;
        font-weight: 500 !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    .dtc-flight-price {
        margin: 0px !important;
        font-size: 20px;
        color: #fb7604 !important;
        padding: 0px 10px !important;
        font-weight: 500 !important;
        display: inline-block;
        line-height: 20px;
        min-width: 140px;
        text-align: center;
    }

    .dtc-flight-price span {
        margin: 0px !important;
        font-size: 12px !important;
        color: #777 !important;
        font-weight: 300 !important;
    }

    .dtc-flight-info button {
        position: relative;
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/next.png);
        background-repeat: no-repeat;
        background-position: 55px center;
        background-size: 12px;
        padding: 7px 30px 7px 15px;
        margin: 0px;
        border-radius: 3px;
        display: inline-block;
        white-space: nowrap;
        border: 0px;
        font-size: 14px;
        color: #FFF !important;
        font-weight: 300;
        line-height: 20px;
        text-transform: none;
    }

    .dtc-flight-info button:hover {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/next.png);
        background-repeat: no-repeat;
        background-position: 60px center;
        background-size: 14px;
    }

    .dtc-flight-numb {
        font-size: 14px;
        font-weight: 600 !important;
    }

    .dtc-flight-line {
        position: relative;
        margin: 5px 0px;
    }

    .dtc-flight-detail {
        cursor: pointer;
        text-decoration: none;
        font-size: 13px !important;
        text-align: center;
        width: 100%;
    }

    ul.dtc-flight-info li:last-child a.dtc-flight-detail {
        font-size: 16px !important;
    }

    .dtc-flight-detail:hover {
        text-decoration: none;
    }

    a.dtc-flight-detail::after {
        content: '\f107';
        font-family: FontAwesome;
        font-weight: 100;
        padding-right: 5px;
        line-height: 17px;
        padding-left: 6px;
    }

    a.dtc-flight-active::after {
        content: "";
        font-family: FontAwesome;
        font-weight: 100;
        padding-right: 5px;
        line-height: 17px;
        padding-left: 6px;
    }

    .dtc-flight-fly {
        width: 0px;
        position: relative;
        -webkit-transition: width 1s;
        transition: width 1s;
        height: 1px;
        background: #eaa15f;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dtc-line {
        width: 100%;
    }

    .dtc-flight-fly::before {
        content: "\f111";
        font-family: FontAwesome;
        font-size: 7px;
        position: absolute;
        left: 0px;
        color: #fc7700;
    }

    .dtc-flight-fly::after {
        content: "\f0fb";
        font-family: FontAwesome;
        font-size: 16px;
        position: absolute;
        right: 0px;
        color: #fc7700;
    }

    /* .dtc-flight-box-detail {
        background-color: #eee;
        overflow: hidden;
        transition: height 1s;
        display: none;
        margin: 0px !important;
        padding: 6px 6px 0px 6px !important;
    } */

    .dtc-flight-fare {
        position: relative;
        padding: 5px;
        align-items: center;
        background-color: #FFF;
    }

    .dtc-flight-fare .dtc-flight-info {
        border: 0.5px solid #eee;
        border-radius: 3px;
    }

    .dtc-flight-segment {
        font-size: 13px;
        font-weight: 400;
        color: #28a745;
    }

    ul.dtc-box-sort {
        margin: 0px !important;
        padding: 0px !important;
        background: #eee;
        list-style: none !important;
        display: flex;
    }

    ul.dtc-box-sort li {
        flex: 1;
        padding: 5px;
        margin: 0px;
        text-align: center;
        cursor: pointer;
    }

    ul.dtc-box-sort li .hang {
        margin-left: -50px;
    }

    ul.dtc-box-sort li .tm {
        margin-left: -30px;
    }

    ul.dtc-box-sort li .fullh {
        margin-left: -25px;
    }

    ul.dtc-box-sort li .gh {
        margin-left: -15px;
    }

    ul.dtc-box-sort li:last-child {
        background: url(https://plugin.datacom.vn/Resources/images/Icon/chart.png) no-repeat right center;
        background-size: 20px;
        margin-right: 8px;
        max-width: 80px;
    }

    ul.dtc-box-sort span {
        color: #080808;
        font-size: 13px !important;
        font-weight: 400 !important;
    }

    ul.dtc-box-sort span:hover {
        color: #fc7700;
    }

    ul.dtc-box-sort .dtc-asc {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/sort.png);
        background-position: right -20px;
        background-repeat: no-repeat;
        padding-right: 14px;
        font-weight: 600 !important;
    }

    ul.dtc-box-sort .dtc-desc {
        background-image: url(https://plugin.datacom.vn/Resources/images/Icon/sort.png);
        background-position: right 1px;
        background-repeat: no-repeat;
        padding-right: 14px;
        font-weight: 600 !important;
    }

    ul.dtc-flight-info {
        padding: 8px 0px !important;
        display: flex;
        flex: 1;
        box-shadow: none;
        -moz-box-shadow: none;
        webkit-box-shadow: none;
    }

    .dtc-flight-main ul.dtc-flight-info {
        box-shadow: none;
    }

    ul.dtc-flight-info-mobile {
        display: none;
    }

    ul.dtc-flight-info li {
        flex: 1;
        text-align: center;
        margin: auto;
        padding: 0px 5px;
        line-height: unset;
    }

    ul.dtc-flight-info li:nth-child(3n+3) {
        max-width: 110px;
    }

    ul.dtc-flight-info li:last-child {
        text-align: right !important;
    }

    ul.dtc-flight-info li:first-child,
    ul.dtc-flight-info li:last-child {
        flex: none;
        text-align: center;
        margin: auto;
        padding: 0px 5px;
        min-width: 120px;
    }

    ul.dtc-flight-info p {
        border-bottom: none !important;
        color: #000;
    }

    ul.dtc-flight-info li:first-child p {
        font-size: 12px !important;
        margin: 0px !important;
        font-weight: 300 !important;
    }

    ul.dtc-flight-info li label {
        display: inline !important;
    }

    @media (max-width:990px) {

        /* flight */
        ul.dtc-flight-date {
            overflow: scroll;
            -webkit-overflow-scrolling: touch;
        }

        ul.dtc-flight-date li {
            min-width: 100px;
        }

        .dtc-flight-item {
            padding: 0px !important;
            -webkit-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
            box-shadow: 0px 4px 15px 0px rgba(0, 0, 0, 0.19);
        }

        .dtc-flight-item ul.dtc-flight-info li:first-child {
            position: relative !important;
            display: none !important;
        }

        .dtc-flight-item ul.dtc-flight-info li:last-child {
            position: relative !important;
            display: none !important;
        }

        .dtc-flight-item ul.dtc-flight-info li {
            margin-top: 0px !important;
        }

        .dtc-flight-city span {
            display: none;
        }

        ul.dtc-flight-info-mobile {
            background-color: #eee;
            display: inline-block;
            margin: 0px;
            padding: 10px 0px !important;
            list-style-type: none;
            display: flex;
            flex: 1;
        }

        ul.dtc-flight-info-mobile li:first-child img {
            max-width: 60px;
        }

        ul.dtc-flight-info-mobile li {
            flex: none !important;
            text-align: center;
            margin: auto;
            padding: 0px 5px;
        }

        ul.dtc-flight-info-mobile li:first-child {
            text-align: left;
        }

        ul.dtc-flight-info-mobile li:last-child {
            text-align: right;
        }

        ul.dtc-flight-info-mobile button {
            position: relative;
            background: #28a745 url(https://plugin.datacom.vn/Resources/images/Icon/next.png) no-repeat 60px center;
            background-size: 12px;
            padding: 6px 30px 6px 15px !important;
            margin: 0px;
            border-radius: 3px;
            display: inline-block;
            white-space: nowrap;
            border: 0px;
            font-size: 14px;
            color: #FFF !important;
            line-height: 18px !important;
            font-weight: 300 !important;
            text-transform: unset;
        }

        ul.dtc-flight-info li:nth-child(3n+3) {
            max-width: 100px;
        }

        ul.dtc-flight-info li {
            margin-top: 40px;
            line-height: 25px;
        }

        ul.dtc-flight-info li img {
            max-width: 60px !important;
        }

        ul.dtc-flight-info li:first-child {
            position: absolute;
            display: flex;
            align-items: center;
            height: 34px;
            width: 100%;
            padding-bottom: 10px !important;
            border-bottom: 0.5px solid #f0f0f0;
            margin-top: 0px !important;
        }

        ul.dtc-flight-info li:last-child {
            position: absolute;
            display: inline-block;
            width: 100%;
            margin-top: 0px !important;
        }

        ul.dtc-flight-info li:last-child a.dtc-flight-detail {
            font-size: 14px !important;
        }

        .dtc-flight-fare {
            padding: 0px;
            margin: 5px;
        }

        ul.dtc-flight-info {
            border: none;
        }

        .dtc-flight-price {
            padding: 0px !important;
        }
    }

    @media (max-width: 360px) {

        /* result search */
        .dtc-flight-price {
            min-width: 130px !important;
            font-size: 18px !important;
        }
    }

    li {
        list-style: none;
    }

    @media only screen and (max-width: 991px) {
        .col-4 {
            display: none;
        }

        .col-8 {
            max-width: 100%;
        }

        .dtc-step {
            width: 100%;
            font-size: 5px;
        }

        .col-8 .dtc-step {
            width: 110%;
        }

        ul.dtc-box-sort li:last-child {
            display: none;
        }
    }

    .dtc-flight-box-detail {
        background-color: #eee;
        overflow: hidden;
        transition: height 1s;
        display: none;
        margin: 0px !important;
        padding: 6px 6px 0px 6px !important;
    }

    .dtc-box-item {
        background: #FFF;
        padding: 10px;
        margin-bottom: 6px !important;
    }

    .dtc-box-item img {
        max-height: 30px;
        max-width: 80px;
        margin: 0px 10px;
    }

    .dtc-box-item p {
        font-size: 16px !important;
        padding: 10px 0px 3px 0px !important;
        margin-bottom: 10px !important;
        border-bottom: 1px solid #eee;
        color: #000;
    }

    ul.dtc-box-item-flight {
        flex: 1;
        margin-top: 10px !important;
        padding: 3px 0px !important;
        display: flex;
        border: 1px solid #eee;
    }

    ul.dtc-box-item-fare {
        margin: 0px;
        padding: 3px 0px;
        list-style: none;
        display: flex;
        flex: 1;
        border-bottom: 1px dotted #eee;
    }

    ul.dtc-box-item-flight li {
        flex: 1;
        margin: 0px;
        padding: 10px 0px;
        display: grid;
    }

    ul.dtc-box-item-flight li:first-child {
        display: block;
        height: 60px;
        margin-top: 20px;
        text-align: center;
    }

    ul.dtc-box-item-flight li:first-child p {
        font-size: 12px !important;
        margin: 0px !important;
        text-decoration: none !important;
        border: none !important;
        padding: 0px !important;
    }

    ul.dtc-box-item-flight li span {
        display: inline-block !important;
        max-width: 100%;
        font-weight: 300 !important;
        font-size: 14px !important;
        margin: 0px !important;
        padding: 0px !important;
    }

    ul.dtc-box-item-fare li {
        flex: 1;
        padding: 3px 0px !important;
        margin: 0px !important;
        display: grid;
        text-align: center;
    }

    ul.dtc-box-item-fare li:first-child {
        text-align: left;
    }

    ul.dtc-box-item-fare li:last-child {
        text-align: right;
    }

    ul.dtc-box-item-fare.dtc-total {
        font-size: 18px;
        padding: 6px 0px !important;
        color: #fc7700;
        border-bottom: none;
    }

    @media (max-width:990px) {
        .dtc-box-item {
            background: #FFF;
            padding: 0px 5px;
            margin-bottom: 5px !important;
        }

        ul.dtc-box-item-fare li {
            font-size: 12px;
        }

        ul.dtc-box-item-flight {
            display: inline-block;
            width: 100%;
            padding: 5px !important;
            margin-top: 0px;
        }

        ul.dtc-box-item-flight li {
            float: left;
            width: 50%;
        }

        ul.dtc-box-item-flight li:first-child {
            position: absolute;
            margin-top: 30%;
            margin-left: 45%;
            border-bottom: none;
        }

        ul.dtc-box-item-flight li:last-child {
            border-bottom: none;
        }

        ul.dtc-box-item-flight li:nth-child(3) {
            text-align: right;
            border-bottom: none;
        }

        ul.dtc-box-item-flight li span {
            font-size: 13px !important;
        }

        .dtc-box-item img {
            margin: 0px !important;
        }

        .dtc-box-temp {
            margin-bottom: 0px;
        }

        .dtc-box-temp ul li {
            padding: 10px;
        }
    }
</style>
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
                <li sort-value="price"><span class="pr">Giá</span></li>
                <li></li>
            </ul>
            <?php
            foreach ($search_flight as $flight) {
                extract($flight);
                $Departure_Times = date("H:i", strtotime($Departure_Time));
                $Arrival_Times = date("H:i", strtotime($Arrival_Time));
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
                            <div class="dtc-flight-price">' . $Price . '.000<span>VND</span><br></div>
                            <a href="index.php?action=book_flight&id=' . $Flight_ID . '">
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
                            <li>1,500,000</li>
                            <li>704,400</li>
                            <li>2,204,400</li>
                        </ul>
                        <ul class="dtc-box-item-fare">
                            <li>Trẻ em</li>
                            <li>1</li>
                            <li>1,500,000</li>
                            <li>644,400</li>
                            <li>2,144,400</li>
                        </ul>
                        <ul class="dtc-box-item-fare dtc-total">
                            <li><b>Tổng chi phí (VND):</b></li>
                            <li><b>4,348,800</b></li>
                        </ul>
                    </div>
                  </div>
                 </div>
               </div>';
            }
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
                        </div>
                        <div class="form-group form-check">
                            <input type="radio" class="form-check-input" id="round-trip" name="rager" style="margin-left: 34px;">
                            <label class="form-check-label" for="round-trip" style="margin-left: 5px;">Khứ Hồi</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="departure"><i class="fa-solid fa-plane-departure fa-beat"></i> Điểm Xuất Phát</label>
                            <input type="text" class="form-control" id="departure" name="Start_City" placeholder="Điểm xuất phát" value="<?= $Start_City ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="destination"><i class="fa-solid fa-plane-arrival fa-beat"></i> Điểm Đến</label>
                            <input type="text" class="form-control" id="destination" name="Arrival_City" placeholder="Điểm đến" value="<?= $Arrival_City ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="departure-date"><i class="fa-solid fa-person-walking-luggage fa-beat"></i> Ngày Xuất Phát</label>
                            <input type="date" class="form-control" id="departure-date" name="Flight_date" value="<?= $Flight_date ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="return-date"><i class="fa-solid fa-person-walking-luggage fa-beat"></i> Ngày Trở Về</label>
                            <input type="date" class="form-control" id="return-date" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="departure"><i class="fa-solid fa-users fa-beat"></i> Người lớn</label>
                            <input type="number" class="form-control" id="departure" placeholder="Người lớn" value="1">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="departure"><i class="fa-solid fa-users fa-beat"></i> Trẻ Em</label>
                            <input type="text" class="form-control" id="departure" placeholder="Trẻ Em" value="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="search_flight">Tìm Chuyến Bay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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