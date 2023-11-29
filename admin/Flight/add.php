  <main class="app-content">
      <div class="row">
          <div class="col-md-12">
              <form action="index.php?act=add_flight" method="post">
                  <div class="tile">
                      <h3 class="tile-title">Thêm chuyến bay</h3>
                      <div class="tile-body row">
                          <div class="form-group col-md-3">
                              <label class="control-label">Số Chuyến Bay</label>
                              <input class="form-control" type="text" name="number_flight">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Khởi hành</label>
                              <input class="form-control" type="text" name="start">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Điểm đến</label>
                              <input class="form-control" type="text" name="end">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Ngày bay</label>
                              <input class="form-control" type="date" name="Flight_date">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Giờ khởi hành</label>
                              <input class="form-control" type="time" name="time_start">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Thời gian đến</label>
                              <input class="form-control" type="time" name="time_end">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Giá chuyến bay</label>
                              <input class="form-control" type="text" name="price">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Hành Khách</label>
                              <input class="form-control" type="number" name="Passenger">
                          </div>
                          <div class="form-group col-md-3">
                              <label class="control-label">Thời gian bay</label>
                              <input class="form-control" type="text" name="time_flight">
                          </div>
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
                              <label class="control-label">Tick</label>
                              <select name="Ticket" class="form-control_1">
                                  <?php
                                    foreach ($list_type_ticket as $ticket) {
                                        extract($ticket);
                                        echo '<option value="' . $Ticket_ID . '">' . $Ticket_name . '</option>';
                                    }
                                    ?>
                              </select>
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