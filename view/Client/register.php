<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section inner-banner-section bg-overlay-black bg_img" data-background="assets/images/bg/inner-bg.png">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 text-center">
                <div class="banner-content">
                    <h1 class="title">Sign-Up</h1>
                    <div class="breadcrumb-area">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign-Up</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Banner
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop">
    <i class="las la-dot-circle"></i>
    <span>Top</span>
</a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Scroll-To-Top
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Account
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="account-section bg--gray ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                    <!-- <span class="sub-title"><span>Sign Up</span></span> -->
                    <h2 class="section-title">Đăng Ký Tài Khoản</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="account-form-area" data-aos="fade-up" data-aos-duration="1200">
                    <form class="account-form" action="index.php?action=register" method="post">
                        <div class="row mb-10-none">
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="icon-name_icone"></i></label>
                                <input type="text" class="form--control" name="username" placeholder="Tài Khoản" required>
                            </div>
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="icon-Create_Password_icone"></i></label>
                                <input type="password" class="form--control" name="password" placeholder="Password" required>
                            </div>
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="las la-envelope"></i></label>
                                <input type="email" class="form--control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="icon-name_icone"></i></label>
                                <input type="text" class="form--control" name="hoten" placeholder="Họ Tên" required>
                            </div>
                            <div class="col-lg-12 form-group text-center">
                                <p>Bằng cách nhấp vào, bạn xác nhận rằng bạn đã đọc và chấp nhận
                                    <span>Chính sách</span> Và <span>Quyền Riêng Tư</span>
                                </p>
                            </div>
                            <div class="col-lg-12 form-group text-center">
                                <button type="submit" class="btn--base w-100" name="dangky">Đăng ký</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="or mt-10">
                                    <label>Hoặc</label>
                                </div>
                            </div>
                            <div class="col-lg-12 form-group google-submit text-center">
                                <button type="submit" class="btn--base w-100"><span class="mr-2"><img src="assets/images/google.png" alt="google"></span> Tiếp Tục Với
                                    Google</button>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="account-item mt-10">
                                    <label>Bạn đã có tài khoản <a href="index.php?action=login" class="text--base">Đăng Nhập
                                        </a></label>
                                </div>
                            </div>
                        </div>
                        <div class="thongbao">
                            <h2>
                                <?php
                                if (isset($Thongbao) && ($Thongbao != ""))
                                    echo $Thongbao;
                                ?>
                            </h2>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        End Account
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->