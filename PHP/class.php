<?php
    class car{
        private $serial_id;
        public $color;
        public $price;
        function setcolorandprice($color,$price){
            $this->color=$color;
            $this->price=$price;
        }
        function setserialid($serialid){
            $this->serial_id=$serialid;
        }
        function getserialid(){
            return $this->serial_id;
        }
        function getprice(){
            //tax
            $finalprice=$this->price+$this->price*0.13;
            return $finalprice;
        }
    }
    $c1=new car();
    $c1->setcolorandprice("red",100000);
    $c1->setserialid("123456");
    echo "Serial ID:".$c1->getserialid()."<br>";
    echo "Color:".$c1->color."<br>";
    echo "Price after 13% VAT:".$c1->getprice()."<br>";
    ?>