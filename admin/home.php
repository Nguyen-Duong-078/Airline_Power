<style>
    .notification {
        display: none;
        position: fixed;
        top: 70px;
        right: -100%;
        /* Đặt right ban đầu ra khỏi màn hình */
        background-color: transparent;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
        z-index: 9999;
        transition: right 0.6s;
        /* Thêm hiệu ứng chuyển động với thời gian 0.5 giây */
    }

    .notification .lines {
        position: absolute;
        inset: 0;
        /* background: #000; */
        overflow: hidden;
        border-radius: 5px;
        height: 50px;
    }

    .notification .lines::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 600px;
        height: 350px;
        background: linear-gradient(transparent, #45f3ff, red, rgb(215, 255, 69), transparent);
        animation: animate 2s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    .notification .lines::after {
        content: '';
        position: absolute;
        inset: 3.5px;
        background: #fff;
        border-radius: 5px;
    }

    .notification .content {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        overflow: hidden;
    }

    .notification .content .details {
        text-align: center;
        width: 300px;
        z-index: 999999;
        transform: translateY(-11px);
    }

    .notification .content .details h2 {
        font-size: 1em;
        font-weight: 600;
        color: #000;
    }

    .notification .content .details i {
        position: absolute;
        color: red;
        left: 30px;
        top: 16px;
        font-weight: bold;
    }
</style>
<main class="app-content_admin">
    <script>
        window.onload = function() {
            var notification = document.getElementById("auto-notification");
            notification.style.display = "block"; // Hiển thị thông báo

            setTimeout(function() {
                notification.style.right = "10px"; // Hiển thị thông báo bằng cách đặt right về 10px
            }, 100); // Sau 100 milliseconds
            setTimeout(function() {
                notification.style.display = "none"; // Ẩn thông báo sau một khoảng thời gian (ví dụ: 5 giây)
            }, 4000); // 5 giây (5000 milliseconds)
        }
    </script>
    <div class="conten_admin">
        <div id="auto-notification" class="notification">
            <div class="lines"></div>
            <div class="content">
                <div class="details">
                    <h2><i class='bx bx-check-shield'></i>Chào mừng bạn Admin</h2>
                </div>
            </div>
        </div>
        <h4>Welcome</h4>
        <p>
            Chào mừng bạn đến với hệ thống đầy <b>Airline Power</b> đặt vé máy bay rẻ nhất thị trường
        </p>
        <h3>Develop: <a href="https://www.facebook.com/NguyenVanDuong.Copyrights"><strong>Airline Power</strong></a> </h3>
        <div class="image_homes">
            <img src="../image/Shipper_CPS3.77d4065.png" alt="">
        </div>
    </div>
</main>
<main class="app-content_footer">
    <div class="conten_admin">
        <div class="sivers">
            © 2023 <strong>Airline Power</strong> hệ thống được phát triển và vận hành bởi <strong>Airline Power</strong>
        </div>
    </div>
</main>