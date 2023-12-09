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
                                <input type="submit" class="btn--base w-100" name="dangky" value="     Đăng ký" style="color:black">
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
                                <div class="thongbao">
                                    <h2>
                                        <?php
                                        if (isset($Thongbao) && ($Thongbao != ""))
                                            echo $Thongbao;
                                        ?>
                                    </h2>
                                </div>
                            </div>

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