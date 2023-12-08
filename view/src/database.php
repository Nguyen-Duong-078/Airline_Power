<main class="app-content">
     <div class="row">
         <div class="col-md-12">
             <form action="index.php?act=add_voucher" method="post" enctype="multipart/form-data">
                 <div class="tile">
                     <h3 class="tile-title">Thêm Voucher</h3>
                     <div class="tile-body row">
                         <div class="form-group col-md-3">
                             <label class="control-label">ID Voucher</label>
                             <input class="form-control" type="number" placeholder="Tự tăng" name="id_flight" disabled>
                         </div>
                         <div class="form-group col-md-3">
                             <label class="control-label">Voucher_Name</label>
                             <input class="form-control" type="text" name="voucher_name">
                         </div>
                         <div class="form-group col-md-3">
                             <label class="control-label">Voucher_value</label>
                             <input class="form-control" type="text" name="voucher_value">
                         </div> 
                         <div class="form-group col-md-3">
                             <label class="control-label">Voucher_start</label>
                             <input class="form-control" type="date" name="voucher_start">
                         </div>
                         <div class="form-group col-md-3">
                             <label class="control-label">Voucher_end</label>
                             <input class="form-control" type="date" name="voucher_end">
                         </div>
                         <div class="form-group col-md-3">
                             <label class="control-label"> Image </label>
                             <input class="" type="file" name="Image">
                         </div>
                     </div>
                     <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                     <input class="btn btn-cancel" type="reset" value="Nhập lại">
                     <a href="index.php?act=list_voucher"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
                     <div class="thongbao btn">
                         <?php
                            if (isset($thongbao) && ($thongbao != ""))
                                echo $thongbao;
                            ?>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </main>