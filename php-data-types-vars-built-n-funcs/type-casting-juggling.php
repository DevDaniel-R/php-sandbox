<?php 

//? Type Casting: Converting a variable from one type to another. PHP has two ways of doing this/ two situations where this can happen. 
//Todo 1st - is called implicit type casting. This happens when PHP automatically converts a var from one type to another in certain situations 2nd - is called explicit type casting. This is when you explicity tell PHP to convert a var from one type to another. sting to an integer, boolean to an integer endswitch


    $number1 = 5;
    $number2 = 10;
    $number3 = '20';

    $result = $number1 + $number2;
    //* int (string to int)
    $result = $number1 + $number3;

    var_dump($result)
    

?>