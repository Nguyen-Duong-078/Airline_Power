<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Thống kê Doanh Thu Tháng</h3>
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
                        foreach ($list_Month as $list_Month) {
                            extract($list_Month);
                            $Price = $Sum_price;
                            $formattedPrice = number_format($Price, 0, ',', '.');
                            $Months = date("m/Y", strtotime($Month));
                            echo '<tr>
                                    <td>' . $Flight_ID . '</td>
                                    <td>' . $Count_Flight . '</td>
                                    <td>' . $formattedPrice . '</td>
                                    <td>' . $Months . '</td> 
                                    </tr>';
                        }
                        ?>
                    </table>
                </div>
                <a href="index.php?act=statistical"><input class="btn btn-cancel" type="button" value="Thống Kê Ngày"></input></a>
                <a href="index.php?act=chart_week"><input class="btn btn-save" type="button" value="Thống Kê Tuần"></input></a>
                <a href="index.php?act=chart"><input class="btn btn-cancel" type="button" value="Biểu Đồ"></input></a>
            </div>
        </div>
    </div>
</main>