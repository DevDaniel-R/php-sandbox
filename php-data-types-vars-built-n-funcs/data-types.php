<?php
//! Php is a loosely typed language meaning when we define our variables, we don't have to define a type.
//* MAIN 8 TYPES IN PHP

//? String: 
$name = 'Daniel Rodriguez';
$name2 = 'John Doe';

var_dump($name);
// echo getType($name2);
echo '<br />';

//? Integer:
$age = 30;
var_dump($age);
echo'<br />';

//? Float: 
$rating = 4.5;
var_dump($rating);
echo '<br />';
//? Boolean: 
$isLoaded = true;
var_dump($isLoaded);
echo '<br />';

//? Array: 
$friends = ['John', 'Jack', 'Jane' ];
var_dump($friends);
echo '<br />';

//? Object: 
$person = new stdClass();
var_dump($person);
echo '<br />';

//? Null: 
$car = null;
var_dump($car);
echo '<br />';

//? Resource 
$file = fopen('sample.txt', 'r');
var_dump($file);

?>
