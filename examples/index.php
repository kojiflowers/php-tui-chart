<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.css">
        <script type="text/javascript" src="https://rawgit.com/nhnent/tui.code-snippet/v1.3.0/dist/tui-code-snippet.js"></script>
        <script type="text/javascript" src="https://rawgit.com/nhnent/raphael/v2.2.0b/raphael.js"></script>
        <script type="text/javascript" src="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.js"></script>
    </head>
    <body>
        <div id="chart"></div>
        <script type="text/javascript">

            var container = document.getElementById('chart'),
                data = {
                    categories: ['cate1', 'cate2', 'cate3'],
                    series: [
                        {
                            name: 'Legend1',
                            data: [20, 30, 50]
                        },
                        {
                            name: 'Legend2',
                            data: [40, 40, 60]
                        },
                        {
                            name: 'Legend3',
                            data: [60, 50, 10]
                        },
                        {
                            name: 'Legend4',
                            data: [80, 10, 70]
                        }
                    ]
                },
                options = {
                    chart: {
                        width: 500,
                        height: 400,
                        title: 'Chart Title'
                    },
                    yAxis: {
                        title: 'Y Axis Title'
                    },
                    xAxis: {
                        title: 'X Axis Title'
                    }
                };

            console.log(data);

            tui.chart.barChart(container, data, options);
        </script>
    </body>
</html>

