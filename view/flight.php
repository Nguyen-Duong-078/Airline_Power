<main class="app-content">
     <div class="row">
         <div class="col-md-12">
             <div class="tile">
                 <h3 class="tile-title" style="text-align: center;">Danh sách chuyến bay</h3>
                 <div class="tile-body">
                     <table class="table table-hover table-bordered" id="sampleTable">
                         <thead>
                             <tr>
                                 <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                 <th>Số hiệu chuyến bay</th>
                                 <th>Điểm khởi đầu</th>
                                 <th>Điểm kết thúc</th>
                                 <th>Thời gian bắt đầu</th>
                                 <th>Thời gian kết thúc</th>
                                 <th>Giá chuyến bay</th>
                                 <th>Số lượng khách hàng</th>
                                 <th>Thời gian bay</th>
                                 <th>Đặt vé ngay</th>
                             </tr>
                         </thead>
                         <?php
                            foreach ($listflight as $flight) {
                                extract($flight);
                                $datvengay = "index.php?action=datve";
                                echo '<tr>
                                    <td>'.$Flight_Number.'</td>
                                    <td>'.$Start_City.'</td>
                                    <td>'.$Arrival_City.'</td> 
                                    <td>'.$Departure_Time.'</td>
                                    <td>'.$Arrival_Time.'</td>
                                    <td>'.$Price.'</td>
                                    <td>'.$Passenger.'</td>
                                    <td>'.$Flight_time.'</td>
                                    <td><a href="'.$datvengay.'"><button class="btn btn-primary btn-sm trash">Đặt vé ngay</button></a></td>  
                                    </tr>';
                            }
                            ?>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </main>
