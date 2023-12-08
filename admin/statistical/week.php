<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Thống kê Doanh Thu Tuần</h3>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Chuyến Bay</th>
                                <th>Số Vé</th>
                                <th>Doanh Thu</th>
                                <th>Ngày</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($list_week as $week) {
                            extract($week);
                            $Price = $Sum_price;
                            $formattedPrice = number_format($Price, 0, ',', '.');
                            $formatDate = date("d/m/Y", strtotime($Booking_Date));
                            echo '<tr>
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Count_Flight . '</td>
                                    <td>' . $formattedPrice . '</td>
                                    <td>' . $formatDate . '</td> 
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <a href="index.php?act=statistical"><input class="btn btn-cancel" type="button" value="Thống Kê Ngày"></input></a>
                <a href="index.php?act=chart_month"><input class="btn btn-save" type="button" value="Thống Kê Tháng"></input></a>
                <a href="index.php?act=chart"><input class="btn btn-cancel" type="button" value="Biểu Đồ"></input></a>
            </div>
        </div>
    </div>
</main>