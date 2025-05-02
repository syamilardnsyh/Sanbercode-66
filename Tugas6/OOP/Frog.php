<?php

class Frog {
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";
    public $jump= "Hop Hop";

    public function __construct($name){
        $this->name = $name;
    }
}
?>