<?php
if (is_array($update_flight)) {
    extract($update_flight);
}
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=update_flight" method="post">
                <div class="tile">
                    <h3 class="tile-title">Cập nhật chuyến bay</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Số Chuyến Bay</label>
                            <input class="form-control" type="text" name="number_flight" value="<?= $Flight_Number ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Khởi hành</label>
                            <input class="form-control" type="text" name="start" value="<?= $Start_City ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Điểm đến</label>
                            <input class="form-control" type="text" name="end" value="<?= $Arrival_City ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giờ khởi hành</label>
                            <input class="form-control" type="time" name="time_start" value="<?= $Departure_Time ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Thời gian đến</label>
                            <input class="form-control" type="time" name="time_end" value="<?= $Arrival_Time ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giá chuyến bay</label>
                            <input class="form-control" type="text" name="price" value="<?= $Price ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Thời gian bay</label>
                            <input class="form-control" type="text" name="time_flight" value="<?= $Flight_time ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo "$Flight_ID" ?>">
                    <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">
                    <a href="index.php?act=list_flight"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
                    <div class="thongbao btn">
                        <?php
                        if (isset($Thongbao) && ($Thongbao != ""))
                            echo $Thongbao;
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>