<?php
/*
functions
*/
?>

<?php
function myFunction(){
    echo "Hello World";
}
myFunction();
?>

<?php
function nameFunction($fname, $lname){
    echo "$fname";
}
nameFunction("lauren", "odalen");
?>

<?php
function nameFunctionTwo($fname, $lname){
    echo "$lname";
}
nameFunctionTwo("lauren", "odalen");
?>


<?php
function fullName($fname, $lname){
    echo "$fname", " $lname";
}
fullName("lauren", "odalen");
?>


<?php
function addNums(int $a, int $b){
    return $a + $b;
}
echo addNums(5, 5);
?>

<?php
function addNumsTwo(int $a, int $b){
    return $a + $b;
}
echo addNumsTwo(5, "5");
?>