<?php
if (is_array($update_account)) {
    extract($update_account);
}
// $hinhpath = "../upload/" . $Image;
// if (is_file($hinhpath)) {
//     $Image = "<img src='" .  $hinhpath . "' height='50px'>";
// } else {
//     $Image = "No image found";
// }
?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?act=update_account" method="post" enctype="multipart/form-data">
                <div class="tile">
                    <h3 class="tile-title">Phân Quyền</h3>
                    <div class="tile-body row">
                        <div class="form-group col-md-3">
                            <label class="control-label">Chức Vụ</label>
                            <input class="form-control" type="text" name="role" value="<?= $role ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Trạng Thái</label>
                            <input class="form-control" type="text" name="Status" value="<?= $Status ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value=" <?= $User_ID ?>">
                    <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                    <input class="btn btn-cancel" type="reset" value="Nhập lại">
                    <a href="index.php?act=account"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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