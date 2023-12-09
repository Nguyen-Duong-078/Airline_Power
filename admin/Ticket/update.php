<?php
if (is_array($update_type_ticket)) {
    extract($update_type_ticket);
}
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=update_type_ticket" method="post">
                <div class="tile">
                    <h3 class="tile-title">Ticket</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Flight_ID</label>
                            <select name="Flights_Tick" class="form-control_1">
                                <?php
                                foreach ($list_flight as $Flight) {
                                    extract($Flight);
                                    if ($Flights_Tick == $Flight_ID) {
                                        echo  '<option value="' . $Flight_ID . '"selected>' . $Flight_Number . '</option>';
                                    } else {
                                        echo  '<option value="' . $Flight_ID . '">' . $Flight_Number . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ticket_name</label>
                            <input class="form-control" type="text" name="ticket_name" value="<?= $Ticket_name ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Status</label>
                            <input class="form-control" type="text" name="status" value="<?= $Status ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ticket_number</label>
                            <input class="form-control" type="text" name="Ticket_number" value="<?= $Ticket_number ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo "$Ticket_ID" ?>">
                    <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">
                    <a href="index.php?act=list_type_ticket"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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