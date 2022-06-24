<?php
class Pet {
    public $name;
    public $type;
    public $age;

    function __construct($name, $type, $age){
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }
    function getName(){
        return $this->name;
    }

    function getType(){
        return $this->type;
    }

    function getAge(){
        return $this->age;
    }
}

$marley = new Pet("Marley ", "Dog ", "10 ");
echo $marley->getName();
echo $marley->getType();
echo $marley->getAge();

?>

<?php
/*The __destruct() function 
if you create this function PHP will automatically call this function at the end of the scrupt.

Below example has a __construct() function that is automatically called when you create an object from a class, and a __destruct() function that is automatically called at the end of the script
*/
?>

<?php
class Plant {
    public $name;
    public $type;

    function __construct($name){
        $this->name = $name;
    }
    function __destruct(){
        echo "The plant is called {$this->name}.";
    }
}
$pothos = new Plant("Pothos");

?>

<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct(){
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}
$strawberry = new Fruit("Strawberry", "red");
?>