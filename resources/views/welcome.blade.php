<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chartisan example</title>
  </head>
  <body>

    <!-- Chart's container -->
    <div align="center">
        <h1> Chartisan Sample Demo </h1>
            <div id="chart" style="height: 300px;"></div>
            <div align="center">
                <select margin-left: auto; margin-right: auto class="form-select block" id="xspan" name="xspan" onchange="updateChart(this.value)"  >
                    <option value=30 >Last 30</option>
                    <option value=90 >Last 90</option>
                    <option value=180>Last 180</option>
                    <option selected value=200>All</option>
                </select>
            </div>
    </div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    <script>
      const chart = new Chartisan({
                            el: '#chart',
                            hooks: new ChartisanHooks()
                            .legend({ position: 'bottom' })
                            .datasets([{ type: 'line', fill: false }])
                            .tooltip()
                        });
                    updateChart(200);

                    function updateChart(xspan) {
                            chart.update({url: "@chart('sample_chart')?span="+xspan});
                    }
    </script>
  </body>
</html>
