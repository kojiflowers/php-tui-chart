<?php namespace PhpTuiChart;


use PhpTuiChart\Builder\Builder;

class Draw{

    private $data='';
    public $chart='';
    public $type;

    function __construct($type, $chart_data=array())
    {
        $this->data = $chart_data;
        $this->type = $type;
        $this->render();
    }

    public function __toString()
    {
        return $this->render();
    }

    /**
     * Render the finished chart
     * @return string
     */
    public function render(){

        $this->chart = new Builder($this->type,$this->data);

        return $this->chart->buildChart();
    }
}