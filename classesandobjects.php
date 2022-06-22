<?php
class Pet {
    public $name;
    public $age;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }

    function set_age($age){
        $this->age = $age;
    }
    function get_age(){
        return $this->age;
    }
}

$dog = new Pet();
$cat = new Pet();
$bird = "bird";

$dog->set_name('Marley ');
$cat->set_name('Soma ');

echo $dog->get_name();
echo $cat->get_name();

$dog->set_age('10 ');
$cat->set_age('1 ');

echo $dog->get_age();
echo $cat->get_age();

var_dump($dog instanceof Pet);
var_dump($bird instanceof Pet);


?>