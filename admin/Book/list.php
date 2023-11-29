<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách khách hàng</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>User_ID</th>
                                <th>CCCD</th>
                                <th>Birth</th>
                                <th>Flight_ID</th>
                                <th>Seat_Number</th>
                                <th>Booking_Date</th>
                                <th>Total_Price</th>
                                <th>Ticket</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbook as $book) {
                            extract($book);
                            $edit_account = "index.php?act=edit_account&id=" . $User_ID;
                            $delete_account = "index.php?act=delete_account&id=" . $User_ID;
                            // $hinhpath = "../upload/" . $Image;
                            // if (is_file($hinhpath)) {
                            //     $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
                            // } else {
                            //     $hinh = "No image found";
                            // }
                            echo '<tr>
                                    <td>' . $User_ID . '</td>
                                    <td>' . $CCCD . '</td> 
                                    <td>' . $birth . '</td> 
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Seat_Number . '</td>
                                    <td>' . $Booking_Date . '</td>
                                    <td>' . $Total_Price . '</td>
                                    <td>' . $Ticket . '</td>
                                    <td>
                                    <a href="' . $edit_account . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_account . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
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