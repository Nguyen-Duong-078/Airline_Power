<?php
if (is_array($listonevoucher)) {
    extract($listonevoucher);
}
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=update_voucher" method="post">
                <div class="tile">
                    <h3 class="tile-title">Cập nhật chuyến bay</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Voucher_name</label>
                            <input class="form-control" type="text" name="voucher_name" value="<?= $Voucher_name ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Voucher_value</label>
                            <input class="form-control" type="text" name="voucher_value" value="<?= $Voucher_value ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Voucher_start</label>
                            <input class="form-control" type="text" name="voucher_start" value="<?= $Voucher_start ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Voucher_end</label>
                            <input class="form-control" type="text" name="voucher_end" value="<?= $Voucher_end ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id_voucher" value="<?php echo "$Voucher_ID" ?>">
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