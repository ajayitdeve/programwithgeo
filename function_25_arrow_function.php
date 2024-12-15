<?php
//Arrow function introduced in php 7.4
//arrow function provide cleaner systax over anonymous function
//arrow function syntax used for inline call back function 

$numbers=[1,2,3,4];
$x=array_map(fn($number)=>$number*$number, $numbers);
print_r($x);


//lets talk about few differenes
//we can always access the variable from parent scope in arraow function
$var=10;
$y=array_map(fn($number)=>$number*$var, $numbers);
print_r($y);

//another example
$var1=3;
$z=array_map(fn($number)=>$number* ++$var1, $numbers);
echo "\nValue of var1 is not incremented {$var1}\n";
print_r($z);
