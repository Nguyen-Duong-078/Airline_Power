<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Biểu đồ</h3>
        <div class="tile-body">
          <div class="chart">
            <div id="piechart" style="width:100%; max-width:600px; height:470px;">
            </div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
              // Load google charts
              google.charts.load('current', {
                'packages': ['corechart']
              });
              google.charts.setOnLoadCallback(drawChart);
              // Draw the chart and set the chart values
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Loại vé', 'Số lượng'],
                  <?php
                  $tongtk = count($listthongke);
                  $i = 1;
                  foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongtk) $dauphay = "";
                    else $dauphay = ",";
                    echo "['" . $thongke['tenve'] . "', " . $thongke['countflight'] . "]" . $dauphay;
                    $i += 1;
                  }
                  ?>
                ]);
                // Optional; add a title and set the width and height of the chart
                var options = {
                  'title': 'Thống kê danh sách theo vé'
                };
                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
              }
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>