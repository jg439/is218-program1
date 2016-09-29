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

//this is an example of php arrays. adding values.

$myarray = array();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';

print_r($myarray);
//example of associate array, also example of a nested array 2 arrays.
$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

print_r($myAssoc);


//this is how you print a specific value on your array
print_r($myAssoc['value1']);


//this is how you definde a class
class myclass{
	public $myPublic;
	private $myPrivate;
	protected $myProtected;
        //this is the internal reference to an object within a lass, the arrow points to the property or method being accessed within the object.
	public function __construct(){
	$this->myPublic =1;
	$this->myPrivate =2;
	$this->myProtected =3;
		//This is how you call a methid insude an object and pass a value.
		$this->sayHello('Julia');
	}
	
	public function sayHello($name){

		echo 'Hello' . $name . "<br>";
	}

}
//this is how you instantiate a new class object
$obj = new myclass;
print_r($obj);
?>
