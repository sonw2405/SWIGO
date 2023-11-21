<div class="main">
<?php
    include("danhmuc/title.php")
    ?>
    <div class="col-123">
      <h1>Biểu đồ thống kê</h1>
      <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
      </div>

      <script>
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          // Set Data
          const data = google.visualization.arrayToDataTable([
            ['Contry', 'Mhl'],

            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $key => $value) {
              extract($value);
              $dauphay = ($i == $tongdm) ? "" : ",";
              echo "['" . $tendm . "'," . $countsp . "]" . $dauphay;

              $i += 1;
            }
            ?>
          ]);

          // Set Options
          const options = {
            title: 'Biểu đồ danh mục',
            is3D: true
          };

          // Draw
          const chart = new google.visualization.PieChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    </div>

</div>