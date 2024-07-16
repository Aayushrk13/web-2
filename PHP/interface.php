<?php
    interface person{
        public function sleep();
        public function eat();
    }
    class student implements person{
        public function sleep(){
            echo "ZZZZZZZZZ......";
        }
        public function eat(){
            echo "NOM...NOM...NOM";
        }
    }
    $ojb=new student();
    $ojb->sleep();
    $ojb->eat();
?>