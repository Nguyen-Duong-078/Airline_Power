<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Biểu đồ</h3>
                <div class="tile-body">
                    <div class="chart">
                        <script src="https://www.gstatic.com/charts/loader.js"></script>
                        <div id="myChart" style="width:100%; max-width:600px; height:470px;"></div>
                        <script type="text/javascript">
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day', 'price'],
                                    <?php
                                    $tongdm = count($list_Month);
                                    $i = 1;
                                    foreach ($list_Month as $Months) {
                                        extract($Months);
                                        $Months = date("m/Y", strtotime($Month));
                                        if ($i == $tongdm) $dauphay = "";
                                        else $dauphay = ",";
                                        echo "['" . $Months . "'," . $Count_Flight . "," . $Sum_price . "]" . $dauphay;
                                        $i += 1;
                                    }
                                    ?>
                                ]);

                                var options = {
                                    title: 'Thống kê doanh thu tháng',
                                    is3D: true,
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
                <a href="index.php?act=chart_month"><input class="btn btn-save" type="button" value="Danh Sách"></input></a>
            </div>
        </div>
    </div>
</main>