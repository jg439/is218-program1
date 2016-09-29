<?php
//this is how you print text in php
echo 'hello world';
 //how to store value in a variable
$myvar = 'Some text i want to store in a variable';
echo '<br>';
//difference between single ' and " quotes
echo '$myvar';
echo '<br>';
echo "$myvar";

//this is an example of php arrays

$myarray = array();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);
//example of associate array, also example of a nested array 2 arrays.
$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

print_r($myAssoc);

?>
