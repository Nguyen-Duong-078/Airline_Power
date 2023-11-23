<main class="app-content">
       <div class="row">
           <div class="col-md-12">
               <div class="tile">
                   <h3 class="tile-title">Type_ticket</h3>
                   <div class="tile-body">
                       <table class="table table-hover table-bordered" id="sampleTable">
                           <thead>
                               <tr>
                                   <th>Charging_ID</th>
                                   <th>Thuế, Phí</th>
                                   <th>Dịch vụ</th>
                               </tr>
                           </thead>
                           <?php
                            foreach ($listcharging as $charging) {
                                extract($charging);
                                $sua_charging = "index.php?act=sua_type_ticket&id=" . $id_charging;
                                $delete_charging = "index.php?act=delete_type_ticket&id=" . $id_charging;
                                echo '<tr>
                                    <td>' .$id_charging. '</td>
                                    <td>' . $tax. '</td>
                                    <td>' . $service. '</td>
                                    <td>
                                    <a href="' . $sua_charging . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_charging . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                       </table>
                   </div>
                   <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                   <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                   <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                   <a href="index.php?act=add_type_ticket"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
               </div>
           </div>
       </div>
   </main>