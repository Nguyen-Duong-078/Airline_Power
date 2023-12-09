<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Evaluate</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Evaluate_ID</th>
                                <th>Blog_ID</th>
                                <th>Comment</th>
                                <th>Evaluate_Date</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_evaluate as $type_ticket) {
                            extract($type_ticket);
                            $delete_type_ticket = "index.php?act=delete_evaluate&id=" . $Evaluate_ID;
                            echo '<tr>
                                    <td>' . $Evaluate_ID . '</td>
                                    <td>' . $ID_pro . '</td>
                                    <td>' . $Comment . '</td>
                                    <td>' . $Evaluate_Date . '</td>
                                    <td>
                                    <a href="' . $delete_type_ticket . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
            </div>
        </div>
    </div>
</main>