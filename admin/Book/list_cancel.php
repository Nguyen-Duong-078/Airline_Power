<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Danh sách vé bị hủy</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID_ĐC</th>
                                <th>Name</th>
                                <th>GT</th>
                                <th>CCCD</th>
                                <th>Birth</th>
                                <th>Chuyến</th>
                                <th>Ghế</th>
                                <th>Ngày đặt</th>
                                <th>Giá</th>
                                <th>Vé Hạng</th>
                                <th>Trạng Thái</th>
                                <th>Pay</th>
                                <th>SET</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbook as $book) {
                            extract($book);
                            $births = date("d/m/Y", strtotime($birth));
                            $Booking_Dates = date("d/m/Y", strtotime($Booking_Date));
                            $Price = number_format($Total_Price, 0, ',', '.');
                            $edit_book = "index.php?act=edit_book&id=" . $Booking_ID;
                            if ($Check_InFL == 'Hủy') {
                                echo '<tr>
                                    <td>' . $Booking_ID . '</td>
                                    <td>' . $Name . '</td>
                                    <td>' . $Sex . '</td>
                                    <td>' . $CCCD . '</td> 
                                    <td>' . $births . '</td> 
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Seat_Number . '</td>
                                    <td>' . $Booking_Dates . '</td>
                                    <td>' . $Price . '</td>
                                    <td>' . $Ticket . '</td>
                                    <td>' . $Check_InFL . '</td>
                                    <td>' . $Pay . '</td>
                                    <td>
                                    <a href="' . $edit_book . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa">
                                    </a>
                                    </td>
                                 </tr>';
                            }
                        }
                        ?>
                    </table>
                    <a href="index.php?act=book_flight"><input class="btn btn-save" type="button" value="Vé Đã Đặt"></input></a>
                </div>
            </div>
        </div>
</main>