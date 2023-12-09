<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Ticket</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Bill_ID</th>
                                <th>User_ID</th>
                                <th>PartnerCode</th>
                                <th>OrderId</th>
                                <th>Thông Tin</th>
                                <th>Giá</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_bill as $bill) {
                            extract($bill);
                            $delete_bill = "index.php?act=delete_bill&id=" . $Bill_ID;
                            echo '<tr>
                                    <td>' . $Bill_ID . '</td>
                                    <td>' . $User_ID . '</td>
                                    <td>' . $partnerCode . '</td>
                                    <td>' . $orderId . '</td>
                                    <td>' . $orderInfo . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $Method . '</td>
                                    <td>' . $Status . '</td>
                                    <td>
                                   <a href="' . $delete_bill . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
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