<?php
$txt = "PHP";
echo "I love $txt!";
?>


<?php
$someVariable = "Hello World";
echo "Here is a PHP $someVariable";
?>

<?php
echo "Testing scope with $txt";
?>

<?php
$x = 5 + 5;
echo $x
?>


<?php
/*
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
*/
?>

<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

<?php
/*
how to create an array
*/?>

<?php
$pets = array("dog", "cat", "bird");
var_dump($pets);
var_dump($pets[2]);
?>

<?php
/*
how to create an object
*/?>

<?php
class Pet {
    public $name;
    public $color;
    public $age;
    public function __construct($name, $color, $age){
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }
    public function message(){
        return "My dog is named " . $this->name . " and she is " . $this->color . " and is about to turn " . $this->age . "!";
    }
    public function messageTwo(){
        return "My cat is named " . $this->name . " and he is " . $this->color . " and is about to turn " . $this->age . "!";
    }
}

$myPet = new Pet("Marley", "gold", "11");
echo $myPet -> message();
$myPet = new Pet("Soma", "orange", "1");
echo $myPet -> messageTwo();
?>