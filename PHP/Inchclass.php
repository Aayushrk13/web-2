<?php
class converter
{
    public $inch;
    public $feet;
    function getinch(){
        $this->inch=45;
    }
    function convert(){
        $this->feet=$this->inch/12;
        $this->inch=$this->inch%12;
    }
    function display(){
        echo "$this->feet.$this->inch";
    }
    
}
$c=new converter();
$c->getinch();
$c->convert();
$c->display();
?>