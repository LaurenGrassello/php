<?php
/*
if statement- executes some code if one condition is true
if...ekse statement- executes some code if a condition is true and another code if that condition is false
if...elseif...else statement- executes different codes for more than two conditions
switch statement- selects one of many block of code to be executed
*/
?>

<?php
/*
if statement 
if(condition){
    code to be executed if condition is true
}
*/
?>

<?php
$t = date("H");

if($t < "20"){
    echo "Have a good day!";
}
?>


<?php
/*
if else statement 
if(condition){
    code to be executed if condition is true
}else{
    code to be executed if condition is false
}
*/
?>

<?php
$t = date("H");

if($t < "20"){
    echo "Have a good day!";
}else{
    echo "Have a good night!";
}
?>


<?php
/*
if else if else statement 
if(condition){
    code to be executed if condition is true
}elseif(condition){
    code to be executed if first condition is false and this condition is true
}else{
    code to be executed if all conditions are false
}
*/
?>

<?php
$t = date("H");

if($t < "10"){
    echo "Have a good morning";
}elseif($t < "20"){
    echo "Have a good day";
}else{
    echo "Have a good evening";
}
?>


<?php
/*
the switch statement

switch(n){
    case label1:
        code to be executed if n=label1;
        break;
        case label2;
        code to be executed if n=label2;
        break;
        case label3;
        code to be executed if n=label3;
        break;
        ...
        default:
        code to be executed if n is different from all labels;
}

how it works:
fist we have a single expression n (most often a variable), that is evaluated once. 
The value of the expression is then compared with the values for each case in the structure.
If there is a match, the block of code associated with that case is executed. Use break
to prevent the code from running into the next case automatically. The default statement is used
if no match is found.
*/
?>

<?php
$favcolor = "purple";

switch ($favcolor){
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "red":
        echo "Your favorite color is red!";
        break;
    case "yellow":
        echo "Your favorite color is yellow!";
        break;
    case "pink":
        echo "Your favorite color is pink!";
        break;
    default:
    echo "Your favorite color is neither blue, red, yellow, or pink!";
}
?>

<?php
$favcolor = "blue";

switch ($favcolor){
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "red":
        echo "Your favorite color is red!";
        break;
    case "yellow":
        echo "Your favorite color is yellow!";
        break;
    case "pink":
        echo "Your favorite color is pink!";
        break;
    default:
    echo "Your favorite color is neither blue, red, yellow, or pink!";
}
?>