<main class="app-content">
       <div class="row">
           <div class="col-md-12">
               <div class="tile">
                   <h3 class="tile-title">Danh sách chuyến bay</h3>
                   <div class="tile-body">
                       <table class="table table-hover table-bordered" id="sampleTable">
                           <thead>
                               <tr>
                                   <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                   <th>Mã Loại Vé</th>
                                   <th>Tên Loại Vé</th>
                                   <th>Số Lượng Chuyến Bay</th>
                                   <th>Giá Thấp Nhất</th>
                                   <th>Giá Cao Nhất</th>
                                   <th>Giá Trung Bình</th>
                               </tr>
                           </thead>
                           <?php
                            foreach ($listthongke as $tk) {
                                extract($tk);
                                echo '<tr>
                                    <td>' . $mave . '</td>
                                    <td>' . $tenve . '</td>
                                    <td>' . $countflight . '</td>
                                    <td>' . $mingia . '</td>
                                    <td>' . $maxgia. '</td>
                                    <td>' . $avggia . '</td>
                                    <td>   
                                    
                                    </tr>';
                            }
                            ?>
                            <a href="index.php?act=bieudo">Xem biểu đồ</a>
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