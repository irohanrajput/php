<?php

class Car{
    public $brand;
    public $model;
    private $owner;

    public function __construct($brand, $model, $owner) {
        $this->brand = $brand;
        $this->model = $model;
        $this->owner = $owner;
    }

    public function get_details(){
        return ("It is a {$this->brand} {$this->model} owner by {$this->owner} ");
    }
}

$car1 = new Car("Tata", "Harrier", "Gungun");
$car2 = new Car("Toyota", "Fortuner", "Rohan");


echo ("{$car1->brand} {$car1->model}");
// echo ("{$car1->brand} {$car1->model} is owned by {$car1->owner}"); this will throw and error.

echo ($car1->get_details());