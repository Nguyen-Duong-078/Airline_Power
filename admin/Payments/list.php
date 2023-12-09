<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Ticket</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Payment_ID</th>
                                <th>Ticket_name</th>
                                <th>Status</th>
                                <th>Ticket_number</th>
                                <th>Flights_Tick</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($lis_payments as $pay) {
                            extract($pay);
                            $sua_pay = "index.php?act=sua_type_ticket&id=" . $Payment_ID;
                            $delete_pay = "index.php?act=delete_type_ticket&id=" . $Payment_ID;
                            echo '<tr>
                                    <td>' . $Payment_ID . '</td>
                                    <td>' . $Ticket_name . '</td>
                                    <td>' . $Status . '</td>
                                    <td>' . $Ticket_number . '</td>
                                    <td>' . $Flights_Tick . '</td>
                                    <td>
                                    <a href="' . $sua_pay . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_pay . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
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