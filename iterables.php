<?php
/*
an iterable is any value which can be looped through with a foreach() loop

the iterable keyword can be used as a data type of a function argument or as the return 
type of a function
*/
?>

<?php
/*
use an iterable function argument
*/
?>

<?php
function printIterableOne(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item;
    }
}

$arr = ["a", "b", "c", "d"];
$arrNames = ["Marley ", "Soma ", "Lauren ", "Chris "];
printIterable($arr);

printIterable($arrNames);
?>

<?php
/*
return an iterable
*/
?>

<?php
function getIterable():iterable {
    return ["a", "b", "c"];
}

$myIterable = getIterable();
foreach($myIterable as $item){
    echo $item;
}
?>

<?php
/*
Creating Iterables

Arrays:
All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.

Iterators:
ANy object that implements the Iterator interface can be used as an argument of a function that requires an iterable.

Any iterator contains a list of items and provides methods to loop through them. It keeps a pointer to one of the elements in the list. Each item in the list should have a key which can be used to find the item.

An iterator musr have these methods:
-current()  -> returns the element that the pointer is currently pointing to. It can be any data type

-key() -> returns the key associated with the current element in the list. It can be only an int, float, bool, or string.

-next() -> moves the pointer to the next element in the list

-rewind() -> moves the pointer to the first element in the list

valid() -> if the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case.

*/
?>


<?php
/*
Implement the iterator interface and use it as an iterable
*/
?>

<?php
//create an iterator

class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct($items){
        //array_values() makes sure that the keys are numbers

        $this->items = array_values($items);
    }

    public function current(){
        return $this->items[$this->pointer];
    }

    public function key(){
        return $this->pointer;
    }

    public function next(){
        $this->pointer++;
    }

    public function rewind(){
        $this->pointer = 0;
    }

    public function valid(){
        //count indicates how many items are in the list
        return $this->pointer < count($this->items);
    }

} 

//A function that uses iterables
function printIterable(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item;
    }
}

//use the iterator as an iterable
$iterator = new MyIterator(["e", "f", "g"]);
printIterable($iterator);
?>