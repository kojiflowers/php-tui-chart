# php-tui-chart
A PHP wrapper class for generating <a href="https://nhnent.github.io/tui.chart/latest/tutorial-example03-01-line-chart-basic.html">Toast UI Charts</a>.

**Example use:**

Include the js and css for TUI Chart:

```html
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.css" />
<script type="text/javascript" src="https://rawgit.com/nhnent/tui.code-snippet/v1.3.0/dist/tui-code-snippet.js"></script>
<script type="text/javascript" src="https://rawgit.com/nhnent/raphael/v2.2.0b/raphael.js"></script>
<script type="text/javascript" src="https://uicdn.toast.com/tui.chart/latest/tui-chart.min.js"></script>
```


Page HTML Content:
```html
<div id="chart"></div> <!-- this is where the chart will load in -->
```
PHP Code:

```php
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
    'width' => 800,
    'height' => 400,
    'title' => 'Vehicle Sales for 2017',
    'yAxisLabel' => 'Brands',
    'xAxisLabel' => 'Sales in Millions',

];

$chart = new PhpTuiChart\Draw('lineChart',$data);  // lib uses TUI Chart names: lineChart, barChart, columnChart

echo $chart;
?>
```

Live examples:
* <a href="http://projects.kojiflowers.com/php-tui-chart/examples/bar-chart.php">Bar Chart</a>
* <a href="http://projects.kojiflowers.com/php-tui-chart/examples/line-chart.php">Line Chart</a>
* <a href="http://projects.kojiflowers.com/php-tui-chart/examples/column-chart.php">Column Chart</a>
