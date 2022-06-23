<?php
/* 
to create a constant use the define() function
define(name, value)
is case sensitive.
tried using the case-insensitive boolean and was given an error that it is no longer supported
*/
?>


<?php
define("GREETING", "Welcome to PHP");
echo GREETING;
?>


<?php
/* 
create an array constant
*/
?>

<?php
define("pets", [
    "Marley",
    "Soma"
]);
echo pets[0];
?>

<?php
/* 
constants are global and can be used across the entire script
*/
?>

<?php
function myTest(){
    echo GREETING;
}
myTest();

function anotherTest(){
    echo pets[1];
}
anotherTest();
?>
