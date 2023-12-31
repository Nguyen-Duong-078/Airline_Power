   <main class="app-content">
       <div class="row">
           <div class="col-md-12">
               <div class="tile">
                   <h3 class="tile-title">Danh sách chuyến bay</h3>
                   <div class="tile-body">
                       <table class="table table-hover table-bordered" id="sampleTable">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Chuyến</th>
                                   <th>Khởi Hành</th>
                                   <th>Điểm Đến</th>
                                   <th>Ngày Bay</th>
                                   <th>Giờ Bay</th>
                                   <th>Giờ Đến</th>
                                   <th>Giá</th>
                                   <th>Khách</th>
                                   <?php
                                    if ($_SESSION['role'] == 1) {
                                    ?>
                                       <th>Tính năng</th>
                                   <?php } ?>
                               </tr>
                           </thead>
                           <?php
                            foreach ($list_flight as $flight) {
                                extract($flight);
                                $Departure_Times = date("H:i", strtotime($Departure_Time));
                                $Arrival_Times = date("H:i", strtotime($Arrival_Time));
                                $Flight_dates = date("d/m/Y", strtotime($Flight_date));
                                if ($_SESSION['role'] == 1) {
                                    $sua_flight = "index.php?act=sua_flight&id=" . $Flight_ID;
                                    $delete_flight = "index.php?act=delete_flight&id=" . $Flight_ID;
                                }
                                if ($_SESSION['role'] == 1) {
                                    echo '<tr>
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Flight_Number . '</td>
                                    <td>' . $Start_City . '</td>
                                    <td>' . $Arrival_City . '</td>
                                    <td>' . $Flight_dates . '</td>
                                    <td>' . $Departure_Time . '</td>
                                    <td>' . $Arrival_Times . '</td>
                                    <td>' . $Price . '</td>
                                    <td>' . $Passenger . '</td>
                                    <td>
                                    <a href="' . $sua_flight . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_flight . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>                           
                                    </td>
                                    </tr>';
                                } else {
                                    echo '<tr>
                                    <td>' . $Flight_Number . '</td>
                                    <td>' . $Start_City . '</td>
                                    <td>' . $Arrival_City . '</td>
                                    <td>' . $Flight_dates . '</td>
                                    <td>' . $Departure_Time . '</td>
                                    <td>' . $Arrival_Time . '</td>
                                    <td>' . $Price . '</td>
                                    <td>' . $Passenger . '</td>
                                    </tr>';
                                }
                            }
                            ?>
                       </table>
                   </div>
                   <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                   <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                   <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                   <a href="index.php?act=add_flight"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
               </div>
           </div>
       </div>
   </main>