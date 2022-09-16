<?php
/*
While loop
*/
?>

<?php
$i = 1;
while($i < 10){
echo $i;
$i++;
}
?>

<?php
/*
Do While loop
*/
?>

<?php
$i = 1;
do{
    echo $i;
    $i++;
}while ($i < 7);
?>

<?php
/*
For loop
*/
?>

<?php
for($i = 0; $i < 10; $i++){
    echo $i;
}
?>

<?php
/*
Loop through array// for each
*/
?>

<?php
$colors = array("purple", "pink", "blue", "yellow");
foreach($colors as $x){
    echo $x;
}
?>

