     <!--Start Banner-->
     <section class="banner-section">
         <div class="banner-element" data-aos="fade-left" data-aos-duration="1200">
             <img src="assets/images/element/element-1.png" alt="element">
         </div>
         <div class="banner-element-two">
             <img src="assets/images/element/element-3.png" alt="element">
         </div>
         <div class="banner-element-three">
             <img src="assets/images/element/element-4.png" alt="element">
         </div>
         <div class="banner-element-four">
             <img src="assets/images/element/element-5.png" alt="element">
         </div>
         <div class="banner-social-area">
             <ul class="banner-social">
                 <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href="#0" class="active"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="#0"><i class="fab fa-youtube"></i></a></li>
                 <li><a href="#0"><i class="fab fa-instagram"></i></a></li>
             </ul>
         </div>
         <div class="container-fluid">
             <div class="row justify-content-center align-items-center mb-30-none">
                 <div class="col-xxl-5 col-xl-6 col-lg-12 mb-30">
                     <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                         <span class="sub-title"><span>Airline </span> Power</span>
                         <h1 class="title">Đặt vé máy bay riêng</h1>
                         <p>Airline tự hào nâng tầm và vượt qua tiêu chuẩn dành cho sự sang trọng và dành cho doanh nghiệp
                             dịch vụ thuê máy bay riêng. Chúng tôi tự hào cung cấp dịch vụ chuyên nghiệp.</p>
                         <div class="banner-btn">
                             <a href="index.php" class="btn--base"><i class="fas fa-chevron-right mr-2"></i> Trải nghiệm ngay</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-xxl-7 col-xl-6 col-lg-6 mb-30">
                     <div class="banner-thumb">
                         <img src="assets/images/element/element-2.png" alt="element">
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--End Banner-->

     <!--Start Call-widget-->
     <div class="call-widget-wrapper">
         <button type="button" class="call-widget-btn"><span class="num"><i class="icon-call-icon"></i> +84 382 500 462
             </span> <span class="arrow"></span></button>
         <div class="call-widget-form-area">
             <form class="book-form" action="index.php?action=search_flight" method="post">
                 <div class="row justify-content-center mb-20-none">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                         <div class="book-select">
                             <label>Điểm khởi hành</label>
                             <div class="book-form-icon">
                                 <i class="fa-solid fa-plane-departure"></i>
                             </div>
                             <input class="book-select form--control" type="text" name="Start_City" placeholder=" Điểm khởi hành" required>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                         <div class="book-select">
                             <label>Điểm đến</label>
                             <div class="book-form-icon">
                                 <i class="fa-solid fa-plane-arrival"></i>
                             </div>
                             <input class="book-select form--control" type="text" name="Arrival_City" placeholder=" Điểm đến" required>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                         <div class="book-select">
                             <label>Ngày đi</label>
                             <div class="book-form-icon">
                                 <i class="fa-solid fa-calendar-days"></i>
                             </div>
                             <input class="book-select form--control" name="date_flight" type="date" style="color:#FFF" required>
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
     <!--End Call-widget-->

     <!--Start Overview-->
     <div class="overview-section ptb-120">
         <div class="container-fluid">
             <div class="overview-area">
                 <div class="overview-element" data-aos="fade-up" data-aos-duration="1200">
                     <img src="assets/images/element/element-6.png" alt="element">
                 </div>
                 <div class="overview-tab">
                     <nav>
                         <div class="overview-tab-thumb" data-aos="fade-left" data-aos-duration="1200">
                             <img src="assets/images/overview/overview-2.png" alt="overview">
                             <div class="nav-tab-area">
                                 <div class="nav-tab-header">
                                     <span class="sub-title"> Ticket</span>
                                     <h2 class="title">Các loại vé Airline Power</h2>
                                 </div>
                                 <?php
                                    foreach ($list_type_ticket as $tikcet) {
                                        extract($tikcet);
                                        // $images =  $image_path . $Image;
                                        echo '
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link" id="' . $Ticket_ID . '" data-toggle="tab" data-target="#' . $Status . '" type="button" role="tab" aria-controls="private-jet" aria-selected="true"><span>➥</span>' . $Ticket_name . '</button>
                                        </div>';
                                    }
                                    ?>
                             </div>
                         </div>
                     </nav>
                     <div class="tab-content" id="nav-tabContent" data-aos="fade-right" data-aos-duration="1200">
                         <div class="tab-pane fade" id="Start" role="tabpanel" aria-labelledby="15">
                             <div class="overview-item">
                                 <div class="overview-thumb">
                                     <img src="assets/images/overview/overview-1.png" alt="overview">
                                     <div class="overview-thumb-content">
                                         <h3 class="title"><a href="#">Hạng vé bình dân</a>
                                         </h3>
                                         <p>Đánh đổi các sân bay đông đúc và lãng phí thời gian để có được sự thoải mái,
                                             dễ chịu và tiện lợi khi di chuyển bằng máy bay riêng.</p>
                                         <div class="overview-btn">
                                             <a href="#" class="custom-btn"><i class="icon-btn-icon-v2"></i> Đặt Ngay</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="tab-pane fade show active" id="Start" role="tabpanel" aria-labelledby="16">
                             <div class="overview-item">
                                 <div class="overview-thumb">
                                     <img src="assets/images/overview/overview-1.png" alt="overview">
                                     <div class="overview-thumb-content">
                                         <h3 class="title"><a href="#">Hạng vé thương gia</a>
                                         </h3>
                                         <p>Đánh đổi các sân bay đông đúc và lãng phí thời gian để có được sự thoải mái,
                                             dễ chịu và tiện lợi khi di chuyển bằng máy bay riêng.</p>
                                         <div class="overview-btn">
                                             <a href="#" class="custom-btn"><i class="icon-btn-icon-v2"></i> Đặt Ngay</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Overview-->


     <!--Start About-->
     <section class="about-section bg-overlay-base ptb-120 bg_img" data-background="assets/images/bg/bg-1.png">
         <div class="about-element">
             <img src="assets/images/element/element-8.png" alt="element">
         </div>
         <div class="container">
             <div class="row justify-content-center mb-30-none">
                 <div class="col-xl-7 col-lg-7 mb-30">
                     <div class="about-content">
                         <span class="sub-title"><span>Thông tin</span> Aieline Power</span>
                         <h2 class="title">Thuê máy bay tư nhân tiết kiệm thời gian của bạn và mang lại sự thoải mái hơn</h2>
                         <p>Airline Power là cách duy nhất để du lịch trọn vẹn theo điều kiện của bạn.
                             Cho dù đó là truy cập một điểm đến từ xa hay lấy lại quyền kiểm soát năng suất và lập lịch bay</p>
                         <div class="about-book-area">
                             <div class="about-book-element">
                                 <img src="assets/images/element/element-7.png" alt="element">
                             </div>
                             <div class="about-book-left">
                                 <h3 class="call-title">Gọi đặt hàng</h3>
                                 <span class="call"><a href="tel:+84 382 500 462">+84 382 500 462</a></span>
                             </div>
                             <div class="about-book-right">
                                 <a href="https://zalo.me/nguyenduong_078" class="btn--base"><i class="icon-btn-icon-v2"></i>
                                     Đặt Ngay</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-5 col-lg-5 mb-30">
                     <div class="about-thumb-video">
                         <div class="video-main">
                             <div class="promo-video">
                                 <div class="waves-block">
                                     <div class="waves wave-1"></div>
                                     <div class="waves wave-2"></div>
                                     <div class="waves wave-3"></div>
                                 </div>
                             </div>
                             <a class="video-icon" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                 <i class="fas fa-play"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End About
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


     <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Feature
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
     <section class="feature-section page-wrapper-two ptb-120">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-12 text-center">
                     <div class="section-header">
                         <span class="sub-title">Phát hiện <span>Airline Power</span> Lợi ích</span>
                         <h2 class="section-title">Khám phá lợi ích của máy bay tư nhân</h2>
                     </div>
                 </div>
             </div>
             <div class="feature-area">
                 <div class="row justify-content-center m-0">
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-world-svgrepo-com"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Du lịch sang trọng & tiện nghi</h3>
                                 <p>Ngoài việc được bay đến nhiều điểm đến khác nhau như một phần công việc của mình,
                                     các phi công lái máy bay còn được giảm giá lớn về tiền bạc.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-money-svgrepo-com-1"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Chuyến bay tính chi phí thông minh</h3>
                                 <p>Việc bay sẽ là một niềm vui và chúng tôi sẽ giúp trải
                                     nghiệm thuê chuyến của bạn trở nên sang trọng và thoải mái hơn trong thời gian sớm nhất.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-briefcase"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Sự tiến triển trong sự nghiệp</h3>
                                 <p>Máy bay dân dụng nhỏ chạy bằng động cơ phản lực đầu tiên là
                                     Morane-Saulnier MS.760 Paris, được phát triển riêng từ những năm 1940</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-note"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Kế hoạch linh hoạt</h3>
                                 <p>Công nghệ của chúng tôi luôn mang đến mức giá tốt nhất cho
                                     việc thuê chuyến – và khả năng độc đáo để mua chỗ ngồi riêng lẻ trên toàn thế giới.</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-job-announcement"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Ưu điểm vượt trội</h3>
                                 <p>Tìm kiếm trên thế giới một cách dễ dàng và minh bạch. Là công ty
                                     hàng không tư nhân tiên tiến về công nghệ duy nhất, XO có thể mang đến cho bạn</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 p-0">
                         <div class="feature-item">
                             <div class="feature-icon">
                                 <i class="icon-coolest-job"></i>
                             </div>
                             <div class="feature-content">
                                 <h3 class="title">Môi trường tuyệt vời nhất</h3>
                                 <p>Thuê toàn bộ máy bay phản lực hoặc cung cấp chỗ ngồi bạn không cần
                                     thông qua ứng dụng của chúng tôi khi cần sở hữu toàn bộ hoặc thậm chí một phần máy bay phản lực</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!--End Feature-->

     <!-- Start Book-form -->

     <section class="book-form-section ptb-120">
         <div class="container">
             <div class="book-form-area bg-overlay-black bg_img" data-background="assets/images/bg/bg-3.png">
                 <div class="row justify-content-center">
                     <div class="col-xl-12 text-center">
                         <div class="section-header white">
                             <span class="sub-title text-white"><span>Airline</span> Book</span>
                             <h2 class="section-title">Đặt chuyến bay cá nhân</h2>
                         </div>
                         <form class="book-form" action="index.php?action=search_flight" method="post">
                             <div class="row justify-content-center mb-20-none">
                                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                     <div class="book-select">
                                         <label>Điểm khởi hành</label>
                                         <div class="book-form-icon">
                                             <i class="fa-solid fa-plane-departure"></i>
                                         </div>
                                         <input class="book-select form--control" type="text" name="Start_City" placeholder=" Điểm khởi hành" required>
                                     </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                     <div class="book-select">
                                         <label>Điểm đến</label>
                                         <div class="book-form-icon">
                                             <i class="fa-solid fa-plane-arrival"></i>
                                         </div>
                                         <input class="book-select form--control" type="text" name="Arrival_City" placeholder=" Điểm đến" required>
                                     </div>
                                 </div>
                                 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 form-group">
                                     <div class="book-select">
                                         <label>Ngày đi</label>
                                         <div class="book-form-icon">
                                             <i class="fa-solid fa-calendar-days"></i>
                                         </div>
                                         <input class="book-select form--control" name="date_flight" type="date" style="color:#FFF" required>
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
     </section>

     <!-- End Book-form -->

     <!-- Start Package -->

     <section class="package-section section--bg ptb-120">
         <div class="package-element-one" data-aos="fade-right" data-aos-duration="1200">
             <img src="assets/images/element/element-24.png" alt="element">
         </div>
         <div class="package-element-two" data-aos="fade-left" data-aos-duration="1200">
             <img src="assets/images/element/element-1.png" alt="element">
         </div>
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-12 text-center">
                     <div class="section-header white">
                         <span class="sub-title text-white"><span>Airline power</span> Khuyến Mãi</span>
                         <h2 class="section-title">Gói Voucher</h2>
                     </div>
                 </div>
             </div>

             <div class="row justify-content-center">
                 <div class="col-xl-12">
                     <div class="package-slider">
                         <div class="swiper-wrapper">
                             <?php
                                foreach ($listvoucher as $voucher) {
                                    extract($voucher);
                                    $images =  $image_path . $Image;
                                    echo '<div class="swiper-slide">
                                    <div class="package-item">
                                        <div class="package-thumb">
                                            <img src="' . $images . '" alt="package">
                                            <div class="package-prize">
                                                <span>Mới</span>
                                            </div>
                                        </div>
                                        <div class="package-content">
                                            <div class="package-content-header">
                                                <h3 class="title"><a href="package-details.html">' . $Voucher_name . '</a>
                                                </h3>
                                            </div>
                                            <div class="package-content-body">
                                                <ul class="package-list">
                                                    <li>Ngày bắt đầu ' . $Voucher_start . '</li>
                                                    <li>Ngày kết thúc ' . $Voucher_end . '</li>
                                                    <li>Voucher: ' . $Voucher_value . '</li>
                                                </ul>
                                                <div class="package-content-footer">
                                                    <div class="package-btn">
                                                        <a href="index.php?action=evaluate" class="custom-btn"><i class="icon-btn-icon-v2 mr-2"></i> Đặt ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                         </div>
                         <div class="slider-prev">
                             <i class="fas fa-chevron-left"></i>
                         </div>
                         <div class="slider-next">
                             <i class="fas fa-chevron-right"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- End Package -->

     <!-- Start Client -->

     <section class="client-section ptb-120">
         <div class="client-element">
             <img src="assets/images/client/map.png" alt="map">
         </div>
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-12 text-center">
                     <div class="section-header">
                         <span class="sub-title"><span>Airline Power</span> Lời chứng thực</span>
                         <h2 class="section-title">Phản hồi của khách hàng</h2>
                     </div>
                 </div>
             </div>
             <div class="client-area">
                 <div class="row justify-content-center align-items-end mb-30-none">
                     <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                         <div class="client-slider-wrapper">
                             <div class="client-slider">
                                 <div class="swiper-wrapper">
                                     <div class="swiper-slide">
                                         <div class="client-item">
                                             <div class="client-header">
                                                 <div class="client-quote">
                                                     <img src="assets/images/client/quote.png" alt="client">
                                                 </div>
                                                 <div class="client-thumb">
                                                     <img src="assets/images/client/client-3.png" alt="client">
                                                 </div>
                                             </div>
                                             <div class="client-content">
                                                 <p>Chúng tôi dạy võ vì chúng tôi yêu thích nó - không phải vì chúng tôi muốn
                                                     kiếm tiền cho bạn.</p>
                                             </div>
                                             <div class="client-footer">
                                                 <div class="client-footer-left">
                                                     <h4 class="title"><a href="#0">Nguyễn Khánh Linh</a></h4>
                                                     <span class="sub-title">Sr. Tư Vấn</span>
                                                 </div>
                                                 <div class="client-footer-right">
                                                     <span class="ratings">
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star active"></i>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="swiper-slide">
                                         <div class="client-item">
                                             <div class="client-header">
                                                 <div class="client-quote">
                                                     <img src="assets/images/client/quote.png" alt="client">
                                                 </div>
                                                 <div class="client-thumb">
                                                     <img src="assets/images/client/client-4.png" alt="client">
                                                 </div>
                                             </div>
                                             <div class="client-content">
                                                 <p>Chúng tôi dạy võ vì chúng tôi yêu thích nó - không phải vì chúng tôi muốn
                                                     kiếm tiền cho bạn.</p>
                                             </div>
                                             <div class="client-footer">
                                                 <div class="client-footer-left">
                                                     <h4 class="title">Lê Thị Hoài</h4>
                                                     <span class="sub-title">Giám đốc tiếp thị</span>
                                                 </div>
                                                 <div class="client-footer-right">
                                                     <span class="ratings">
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star"></i>
                                                         <i class="fas fa-star active"></i>
                                                     </span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                         <div class="client-right-thumb">
                             <img src="assets/images/client/client-big.png" alt="client">
                             <div class="client-thumb-overlay">
                                 <div class="video-main">
                                     <div class="promo-video">
                                         <div class="waves-block">
                                             <div class="waves wave-1"></div>
                                             <div class="waves wave-2"></div>
                                             <div class="waves wave-3"></div>
                                         </div>
                                     </div>
                                     <a class="video-icon" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/Hw4ctvV25H0">
                                         <i class="las la-play"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- End Client -->


     <!--  Start Blog -->

     <section class="blog-section ptb-120">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-xl-12 text-center">
                     <div class="section-header">
                         <span class="sub-title"><span>Airline Power</span> Blog</span>
                         <h2 class="section-title">Tin Tức Mới Nhất</h2>
                     </div>
                 </div>
             </div>
             <div class="row justify-content-center mb-30-none">
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                     <div class="blog-item">
                         <div class="blog-thumb">
                             <img src="assets/images/blog/blog-1.png" alt="blog">
                         </div>
                         <div class="blog-content">
                             <div class="blog-post-meta">
                                 <span class="date">20 March 2022</span>
                                 <span class="comment">3 Comment</span>
                             </div>
                             <h3 class="title"><a href="blog-details.html">Chuyến bay thuê ở
                                     Mỹ</a></h3>
                             <p>Với vô số máy bay tư nhân phổ biến để lựa chọn, di chuyển bằng máy bay riêng
                                 điều lệ là hiệu quả nhất</p>
                             <div class="blog-btn">
                                 <a href="blog-details.html">Đọc thêm <i class="icon-Group-2361 ml-2"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                     <div class="blog-item">
                         <div class="blog-thumb">
                             <img src="assets/images/blog/blog-2.png" alt="blog">
                         </div>
                         <div class="blog-content">
                             <div class="blog-post-meta">
                                 <span class="date">23 February 2022</span>
                                 <span class="comment">4 Comment</span>
                             </div>
                             <h3 class="title"><a href="blog-details.html">Công nghệ của chúng tôi</a>
                             </h3>
                             <p>Việc thuê máy bay riêng cho mục đích giải trí cho phép bạn, gia đình và bạn bè của bạn </p>
                             <div class="blog-btn">
                                 <a href="blog-details.html">Đọc thêm <i class="icon-Group-2361 ml-2"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                     <div class="blog-item">
                         <div class="blog-thumb">
                             <img src="assets/images/blog/blog-3.png" alt="blog">
                         </div>
                         <div class="blog-content">
                             <div class="blog-post-meta">
                                 <span class="date">18 June 2022</span>
                                 <span class="comment">6 Comment</span>
                             </div>
                             <h3 class="title"><a href="blog-details.html">Tìm kiếm thế giới dễ dàng</a></h3>
                             <p>Nó nhanh chóng trở nên phổ biến khi thời gian giải trí ngày càng trở nên quý giá và chúng ta
                                 đánh giá cao trải nghiệm</p>
                             <div class="blog-btn">
                                 <a href="blog-details.html">Đọc thêm <i class="icon-Group-2361 ml-2"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- End Blog -->