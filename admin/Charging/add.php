<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=add_charging" method="post">
                <div class="tile">
                    <h3 class="tile-title">Type_ticket</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">ID Charging</label>
                            <input class="form-control" type="number" placeholder="Tự tăng" disabled>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Thuế, Phí</label>
                            <input class="form-control" type="text" name="tax">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Dịch vụ</label>
                            <input class="form-control" type="text" name="service">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Flight_ID</label>
                            <select name="Flights_ID" class="form-control_1">
                                <option value="0">Tất cả</option>
                                <?php
                                foreach ($list_flight as $flight) {
                                    extract($flight);
                                    echo '<option value="' . $Flight_ID . '">' . $Flight_Number . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">

                    <a href="index.php?act=list_charging"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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