<?php

class Box {
    public $height = 0;
    private $width = 0;
    public $length = 0;

    public function __construct($height, $width, $lenght) {
        $this->$height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function setHeight($width){
       if(is_numeric($width) && $width > 0){
        $this->width = $width;
       } else{
        throw new Exception('Width needs to be a number and bigger than 0');
       }
    }

        public function volume(){
        return $this->$height * $this->width * $this->length;
    }
}

$box1 = new Box(10, 10, 10);
$volume = $box1->volume();
var_dump($box1);
var_dump($volume);
var_dump($box1->volume());

$box2 = new Box(40, 60, 70);

var_dump($box2);
var_dump($box2->volume());
var_dump($box1);