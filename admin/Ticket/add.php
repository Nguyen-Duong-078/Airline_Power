<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=add_type_ticket" method="post">
                <div class="tile">
                    <h3 class="tile-title">Ticket</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Flight_ID</label>
                            <select name="Flights_Tick" class="form-control_1">
                                <?php
                                foreach ($list_flight as $flight) {
                                    extract($flight);
                                    echo '<option value="' . $Flight_ID . '">' . $Flight_Number . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ticket name</label>
                            <input class="form-control" type="text" name="ticket_name">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Status</label>
                            <input class="form-control" type="text" name="status">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ticket_number</label>
                            <input class="form-control" type="text" name="Ticket_number">
                        </div>
                    </div>
                    <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">

                    <a href="index.php?act=list_type_ticket"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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