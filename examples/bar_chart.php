<html>
<head>
    <link rel="stylesheet" href="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.css">
    <script type="text/javascript" src="https://rawgit.com/nhnent/tui.code-snippet/v1.3.0/dist/tui-code-snippet.js"></script>
    <script type="text/javascript" src="https://rawgit.com/nhnent/raphael/v2.2.0b/raphael.js"></script>
    <script type="text/javascript" src="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.js"></script>
</head>
<body>
<div id="chart"></div>
<?php

include('../PhpTuiChart/vendor/autoload.php');

$data = [
    'container_id' =>'chart',
    'keypair' => true,
    'data' => [
        [
            'Tesla' => 20,
            'Chevy' => 40,
            'Chrysler' => 60,
            'Ford' => 80
        ],
        [
            'Tesla' => 30,
            'Chevy' => 40,
            'Chrysler' => 50,
            'Ford' => 10
        ],
        [
            'Tesla' => 50,
            'Chevy' => 60,
            'Chrysler' => 10,
            'Ford' => 70
        ]
    ],
    'categories' => ['Canada', 'China', 'South America'],


    /* 'keypair' => false
    'data' => [
        'series' => [
            [
                'name' => 'Legend1',
                'data'=> [20, 30, 50]
            ],
            [
                'name'=> 'Legend2',
                'data'=> [40, 40, 60]
            ],
            [
                'name'=> 'Legend3',
                'data'=> [60, 50, 10]
            ],
            [
                'name'=> 'Legend4',
                'data'=> [80, 10, 70]
            ]
        ]
    ],*/

    'width' => 800,
    'height' => 400,
    'title' => 'Vehicle Sales for 2017',
    'yAxisLabel' => 'Brands',
    'xAxisLabel' => 'Sales in Millions',

];

$chart = new PhpTuiChart\Draw('barChart',$data);

echo $chart;

?>
</body>
</html>