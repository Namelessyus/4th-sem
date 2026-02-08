<?php
class Fruit{
    // attributes
    public $name;
    public $color;

    // constructor
    function __construct($param_name, $param_color){
        $this->name = $param_name; // assigning the value from parameter
        $this->color = $param_color;
    }

    // function __construct($param_name){
    //     $this->name = $param_name;
    // }

    function get_fruit_info(){
        echo "Name: {$this->name} & Color: {$this->color}";
    }
}

// creating object
$apple = new Fruit("Apple", "Red");
$mango = new Fruit("Mango", "Green");
// accessing class method
$apple->get_fruit_info();
echo "<br>";
$mango->get_fruit_info();