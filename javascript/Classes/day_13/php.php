<?php
    class Animal{
        public $says;
        function says(){
            echo $this->says;
        }
    }
    class Dog extends Animal{
        private $species;
        public function __construct(){
            $this->says = "woof!";
        }
        public function setSpecies($species){
            $this->species = $species;
        }
    }
    class Cat extends Animal{
        private $color;
        public function __construct(){
            $this->says = "meow!";
        }
        public function setColor($color){
            $this->color = $color;
        }
    }
    
    $dog = new Dog();
    $cat = new Cat();

    $dog->says();
    echo "<br>";
    $cat->says();
?>