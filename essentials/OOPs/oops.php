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

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }

}

class new_class{
    public $new_shitt;
    public $another_shitt;
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$apple->name = "here we can put a new name";

$banana->set_name('Banana');

echo $apple->get_name();



// instance of 
$orange = new Fruit();

echo ($orange instanceof new_class);