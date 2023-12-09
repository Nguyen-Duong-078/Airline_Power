  <main class="app-content">
      <div class="row">
          <div class="col-md-12">
              <form action="index.php?act=add_flight" method="post">
                  <div class="tile">
                      <h3 class="tile-title">Thêm chuyến bay</h3>
                      <div class="tile-body row">
                          <div class="form-group col-md-3">
                              <label class="control-label">Voucher</label>
                              <select name="Voucher" class="form-control_1">
                                  <?php
                                    foreach ($listvoucher as $voucher) {
                                        extract($voucher);
                                        echo '<option value="' . $Voucher_ID . '">' . $Voucher_name . '</option>';
                                    }
                                    ?>
                              </select>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Số Chuyến Bay</label>
                              <input class="form-control" type="text" name="number_flight" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Khởi hành</label>
                              <input class="form-control" type="text" name="start" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Điểm đến</label>
                              <input class="form-control" type="text" name="end" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Ngày bay</label>
                              <input class="form-control" type="date" name="Flight_date" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Giờ khởi hành</label>
                              <input class="form-control" type="time" name="time_start" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Thời gian đến</label>
                              <input class="form-control" type="time" name="time_end" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Giá chuyến bay</label>
                              <input class="form-control" type="text" name="price" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Hành Khách</label>
                              <input class="form-control" type="number" name="Passenger" required>
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Thời gian bay</label>
                              <input class="form-control" type="text" name="time_flight" required>
                          </div>
                      </div>
                      <input class="btn btn-save" type="submit" value="Thêm Mới" name="themmoi"></input>
                      <input class="btn btn-cancel" type="reset" value="Nhập lại">

                      <a href="index.php?act=list_flight"><input class="btn btn-save" type="button" value="Danh sách"></input></a>
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