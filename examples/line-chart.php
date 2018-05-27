<?php include('header.php'); ?>
    <h1>Line Chart</h1>
    <div id="chart"></div>
<?php

include('../PhpTuiChart/vendor/autoload.php');

$data = [
    'container_id' => 'chart',
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

$chart = new PhpTuiChart\Draw('lineChart', $data);

echo $chart;

?>

    <h3>PHP Code: </h3>
    <p>Line Chart generates in div with id = "chart"</p>
    <pre>
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

$chart = new PhpTuiChart\Draw('lineChart',$data);

echo $chart;
</pre>


<?php include('footer.php'); ?>