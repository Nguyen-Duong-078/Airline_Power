 <main class="app-content">
     <div class="row">
         <div class="col-md-12">
             <div class="tile">
                 <h3 class="tile-title">Danh sách Voucher</h3>
                 <div class="tile-body">
                     <table class="table table-hover table-bordered" id="sampleTable">
                         <thead>
                             <tr>
                                 <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                 <th>ID VOUCHER</th>
                                 <th>VOUCHER NAME</th>
                                 <th>VOUCHER VALUE</th>
                                 <th>VOUCHER START</th>
                                 <th>VOUCHER END</th>
                                 <th>Image</th>
                                 <th>Chức Năng</th>
                             </tr>
                         </thead>
                         <?php
                            foreach ($listvoucher as $voucher) {
                                extract($voucher);
                                $edit_voucher = "index.php?act=edit_voucher&id_voucher=" . $Voucher_ID;
                                $delete_voucher = "index.php?act=delete_voucher&id_voucher=" . $Voucher_ID;
                                $hinhpath = "../upload/" . $Image;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
                                } else {
                                    $hinh = "No image found";
                                }
                                echo '<tr>
                                    <td>' . $Voucher_ID . '</td>
                                    <td>' . $Voucher_name . '</td>
                                    <td>' . $Voucher_value . '</td> 
                                    <td>' . $Voucher_start . '</td>
                                    <td>' . $Voucher_end . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>
                                    <a href="' . $edit_voucher . '"><input class="btn btn-primary btn-sm trash" type="button" value="Sửa"></a>
                                    <a href="' . $delete_voucher . '"><input class="btn btn-primary btn-sm" type="button" value="Xóa"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                     </table>
                 </div>
                 <input class="btn btn-save" type="submit" value="Chọn Tất Cả"></input>
                 <input class="btn btn-cancel" type="reset" value="Bỏ Chọn Tất Cả">
                 <input class="btn btn-save" type="button" value="Xóa Các Mục Đã Chọn">
                 <a href="index.php?act=add_voucher"><input class="btn btn-cancel" type="button" value="Nhập Thêm"></input></a>
             </div>
         </div>
     </div>
 </main>