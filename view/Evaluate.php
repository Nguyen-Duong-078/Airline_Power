<style>
    .main {
        margin: 0;
        padding: 0;
    }

    .rowtt {
        float: left;
        width: 100%;
    }

    .comment1 {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .comment1 p {
        padding: 10px 0;
        background-color: #CCC;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }
    .binhluan p {
        padding: 10px 0;
        background-color: #CCC;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }
</style>
<div class="main">
    <div class="rowtt comment1">
        <p>Đánh Giá Sản Phẩm</p>
        <?php 
            extract($onevoucher);
                echo '<div class="swiper-slide">
                <div class="package-item">
                    <div class="package-thumb">
                        <img src="'.$Image.'" alt="package">
                        <div class="package-prize">
                            <span>Mới</span>
                        </div>
                    </div>
                    <div class="package-content">
                        <div class="package-content-header">
                            <h3 class="title"><a href="package-details.html"></a>
                            </h3>
                        </div>
                        <div class="package-content-body">
                            <ul class="package-list">
                                <li>Ngày bắt đầu </li>
                                <li>Ngày kết thúc </li>
                                <li>Voucher: </li>
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
        ?>
        
    </div>
    <div class="rowtt binhluan">
        <p>Bình luận</p>
    <!-- <script>
        $(document).ready(function(){
        $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            // Lấy id của sp
        });
    </script>   -->
    </div>
</div>