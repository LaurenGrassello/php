<?php
$pets = array("Marley", "Soma", "JoJo");
echo "My dog is named " . $pets[0] . " and my cat is named " . $pets[1] . "!"
?>

<?php
/*
In PHP, the array() function is used to create an array:

array();

in PHP there are three types of arrays:

-Indexed arrays : arrays with a numeric index
-Assoiative arrays : arrays with named keys
-Multidimensional arrays : arrays containing one or more arrays

*/
?>

<?php
/*
Get length of array -> use count() function to return array length
*/
?>

<?php
$pets = array("Marley", "Soma", "JoJo");
echo count($pets);
?>

<?php
/*
Create addociative array
*/
?>

<?php
$petAge = array("Marley"=>"10", "Soma"=>"1", "JoJo"=>"10");
echo $petAge['Marley'];
?>

<?php
/*
loop through associative array
*/
?>

<?php
foreach($petAge as $x => $y){
    echo " Key = " . $x . " , Value = " . $y;
}
?>

<?php
/*
use method to sort by alpha
*/
?>

<?php
$colors = array("blue", "pink", "green", "orange", "purple", "yellow");
echo sort($colors);
?>

<?php
/*
use method to sort by alpha backwards
*/
?>

<?php
$colors = array("blue", "pink", "green", "orange", "purple", "yellow");
echo rsort($colors);
?>