<!--Start Account-->
<section class="account-section bg--gray ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <!-- <span class="sub-title"><span>Sign In</span></span> -->
                    <h2 class="section-title">Quên Mật Khẩu</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="account-form-area">
                    <form class="account-form" action="index.php?action=forgot" method="post">
                        <div class="row mb-10-none">
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="las la-envelope"></i></label>
                                <input type="email" class="form--control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12 form-group text-center">
                                <input onclick="validateLogin()" type="submit" class="btn--base w-100" name="forgot" value="     Gửi mật khẩu" style="color:black">
                            </div>
                        </div>
                    </form>
                    <div class="thongbao">
                        <h2 style="font-family: 'Times New Roman', Times, serif; font-size:20px">
                            <?php
                            if (isset($Thongbao) && ($Thongbao != ""))
                                echo $Thongbao;
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function validateLogin() {
        var Email = document.getElementById('email').value;
        if (Email == "Nguyenduong708204@gmail.com" || Email == "duongnvph33164@fpt.edu.vn") {
            Swal.fire({
                icon: 'success',
                title: 'Gửi mật khẩu thành công',
                text: 'Mật khẩu đã được gửi về Mail'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Gửi không thành công',
                text: 'Địa chỉ Email không hợp lệ',
            });
        }
    }
</script>

<!--End Account-->