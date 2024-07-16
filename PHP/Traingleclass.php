<?php
class Triangle
{
    public $l;
    public $b;
    function getdimension(){
        $this->l=45;
        $this->b=12;
    }
    function showarea(){
        $area=1/2*$this->l*$this->b;
        echo "Area of Triangle is ".$area;
    }
    
}
$s=new Triangle();
$s->getdimension();
$s->showarea();
?>