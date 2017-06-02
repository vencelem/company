<br><br><br>

<center>

    <h3>Average consumption by car brand</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Brand', 'Average'],
                <?php
                foreach ($consumption as $consumption) {
                    echo "[ '$consumption->brand', $consumption->avg],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart1" style="width: 900px; height: 500px;"></div>


    <h3>Number of workplaces in given cities</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['City', 'number'],
                <?php
                foreach ($workplace as $workplace) {
                    echo "[ '$workplace->city', $workplace->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart2" style="width: 900px; height: 500px;"></div>




    <h3>Frequencion of visited worklpaces</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['workplace', 'pocet'],
                <?php
                foreach ($wrkplacefreq as $wrkplacefreq) {
                    echo "[ '$wrkplacefreq->workplace', $wrkplacefreq->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart3" style="width: 900px; height: 500px;"></div>


    <h3>Usage of vehicles</h3><br><br>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div"></div>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['workplace', 'pocet'],
                <?php
                foreach ($vehicles as $vehicles) {
                    echo "[ '$vehicles->brand $vehicles->model', $vehicles->pocet],";
                }
                ?>
            ]);

            var options = {
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

            chart.draw(data, options);
        }
    </script>

    <div id="piechart4" style="width: 900px; height: 500px;"></div>