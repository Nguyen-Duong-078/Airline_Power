<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách chuyến bay</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Seat_ID</th>
                                <th>Seat_Number</th>
                                <th>Status</th>
                                <th>Users_ID</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_seats as $seats) {
                            extract($seats);
                            $delete_flight = "index.php?act=delete_flight&id=" . $Seat_ID;
                            echo '<tr>
                                    <td>' . $Seat_ID  . '</td>
                                    <td>' . $Seat_Number . '</td>
                                    <td>' . $status . '</td>
                                    <td>' . $user_id . '</td>
                                    <td>
                                     <a href="' . $delete_flight . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>                           
                                    </td>
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                <a href="index.php?act=seat"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
            </div>
        </div>
    </div>
</main>