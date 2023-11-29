<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=seat" method="post">
                <div class="tile">
                    <h3 class="tile-title">Thêm Ghế Ngồi</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Số Ghế</label>
                            <input class="form-control" type="text" name="Seat_Number">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Trạng Thái</label>
                            <select name="status" class="form-control_1">
                                <option value="available">available</option>
                                <option value="booked">booked</option>
                            </select>
                        </div>
                    </div>
                    <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">

                    <a href="index.php?act=list_seats"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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