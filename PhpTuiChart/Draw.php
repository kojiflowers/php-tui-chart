<?php namespace PhpTuiChart;


use PhpTuiChart\Builder\DataPrep;

class Draw{

    private $data='';
    public $chart='';

    use DataPrep;

    function __construct($type, $chart_data=array())
    {
        $this->data = $chart_data;
    }

    public function __toString()
    {
        return $this->chart;
    }

    /**
     * Render the finished chart
     * @return string
     */
    public function render(){
        return $this->chart;
    }
}