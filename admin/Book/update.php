<?php
if (is_array($loadOne_book)) {
    extract($loadOne_book);
}
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=update_pay" method="post" enctype="multipart/form-data">
                <div class="tile">
                    <h3 class="tile-title">Cập Nhật Trạng Thái Thanh Toán</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Thanh Toán</label>
                            <select name="Pay" class="form-control_1">
                                <option value="Xử Lý">Xử Lý</option>
                                <option value="Thành công">Thành Công</option>
                                <option value="Chưa thanh toán">Chưa Thanh Toán</option>
                                <option value="Vé hủy">Vé Hủy</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value=" <?= $Booking_ID ?>">
                    <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                    <a href="index.php?act=book_flight"><input class="btn btn-cancel" type="button" value="Danh sách"></input></a>
                    <div class="thongbao btn">
                        <?php
                        if (isset($thongbao) && ($thongbao != ""))
                            echo $thongbao;
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>