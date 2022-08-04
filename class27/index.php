<?php

class ParentClass {
    public $assets;
    public $screenColor;
    public $uses;


    function __construct($a, $b, $c){
        $this->assets = $a;
        $this->screenColor = $b;
        $this-> uses = $c;
    }

    function parent(){
        return $this->assets . $this->screenColor . $this->uses;
    }

}

$parentClassObj = new ParentClass('Zinnah', 'White', 'good');

echo $parentClassObj->parent();

class Food {
    private $name       = "Apple";
    protected $price    = 20;
    public $weght       = 1;

    function foodContent(){
        return $this->weght;
    }
}

$foodObj = new Food();

echo $foodObj->weght;