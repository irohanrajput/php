<?php
//  Each object has all the properties and methods defined in the class, but they will have different property values.
class Fruit{
    public $name;
    public $color;

    function set_name($name) {
        $this->name = $name;
      }

    function get_name() {
        return $this->name;
    }

}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();