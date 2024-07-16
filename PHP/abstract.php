<?php
    abstract  class person{
        public $name;
        public $age;
        public $gender;
        function __construct($name,$age,$gender){
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
        }
        function eat(){
            echo "The person is eating.";
        }
        abstract function getjob();
    }
    class teacher extends person{
        public $job="Teacher";
        function __construct($name,$age,$gender){
            parent::__construct($name,$age,$gender);
        }
        function getjob(){
            echo "The job is $this->job.";
        }
    }
    $tobj=new teacher("Aayush",19,"male");
    $tobj->eat();
    $tobj->getjob();
    ?>