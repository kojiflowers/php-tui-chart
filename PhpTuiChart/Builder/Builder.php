<?php namespace PhpTuiChart\Builder;


class Builder
{
    use DataPrep;

    protected $container_id;
    protected $chart_data;
    protected $chart_data_json;
    protected $chart_options;
    protected $chart_options_json;
    protected $chart;
    protected $type;
    protected $chart_init;
    protected $keypair;
    protected $default_options =
        [
            'chart'=> [
                'width'=> 500,
                'height'=> 400,
                'title'=> 'Chart Title'
            ],
            'yAxis'=> [
                'title'=> 'Y Axis Title'
            ],
            'xAxis'=> [
                'title'=> 'X Axis Title'
            ]
        ]
    ;

    public function __construct($type,$chart_data)
    {

        $this->type = $type;
        $this->keypair = (isset($chart_data['keypair'])) ? $chart_data['keypair'] : false;
        $this->container_id = (isset($chart_data['container_id'])) ? $chart_data['container_id'] : 'chart';
        $this->chart_data = $chart_data;
        $this->processChartData();
        $this->assignChart();
        $this->chart = $this->buildChart();

    }

    public function __toString()
    {
        return $this->chart;
    }

    public function buildChart(){

       $return ='<script type="text/javascript">';

       $return .="var container = document.getElementById('".$this->container_id."'),";

       $return .="data = JSON.parse('".$this->chart_data_json."');";

       $return .="options = JSON.parse('".$this->chart_options_json."');";

       $return .="console.log(data);";

       $return .= $this->chart_init;

       $return .= '</script>';

       return $return;

    }

    public function processChartData(){

       $this->chart_data_json = $this->buildChartData();
       $this->chart_options_json = $this->buildChartOptions();

    }

    protected function buildChartData(){
        $data = new \stdClass();

        $data->categories = $this->buildChartDataCategories();
        $data->series = $this->buildChartDataSeries();

        return $this->prepArray($data);
    }

    protected function buildChartDataCategories(){

        return $this->chart_data['categories'];

    }

    protected function buildChartDataSeries(){

        if($this->keypair){

            $allData = [];

            // re-organize data into series based structure
            foreach($this->chart_data['data'] as $key => $value){
                foreach($value as $serieskey => $seriesvalue){

                    if(isset($allData[$serieskey])){
                        $allData[$serieskey]['data'][] = $seriesvalue;
                    }else{
                        $series = [];
                        $series['name'] = $serieskey;
                        $series['data'][] = $seriesvalue;
                        $allData[$serieskey] = $series;
                    }

                }

            }

            $allData = array_values($allData);

            $returnData =  $allData;

        }else{
            $returnData =  $this->chart_data['data'];
        }

        return $returnData;

    }

    protected function buildChartOptions(){

        if(isset($this->chart_data['width'])){
            $this->default_options['chart']['width'] = $this->chart_data['width'];
        }

        if(isset($this->chart_data['height'])){
            $this->default_options['chart']['height'] = $this->chart_data['height'];
        }

        if(isset($this->chart_data['title'])){
            $this->default_options['chart']['title'] = $this->chart_data['title'];
        }

        if(isset($this->chart_data['yAxisLabel'])){
            $this->default_options['yAxis']['title'] = $this->chart_data['yAxisLabel'];
        }

        if(isset($this->chart_data['xAxisLabel'])){
            $this->default_options['xAxis']['title'] = $this->chart_data['xAxisLabel'];
        }

        return $this->prepArray((object)$this->default_options);

    }

    protected function assignChart(){

        $this->chart_init =  "tui.chart.".$this->type."(container, data, options);";

    }


}