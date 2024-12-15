<?php
//lets say we want to apply  foo() to result of array_sum()
$sum=function(callable $callaback, int|float ...$numbers):int|float{
    return $callaback(array_sum($numbers));
};
function foo($element){
    return $element*2;
}

echo $sum('foo',1,2,3,4,5);

//we can pass anonymous function directly
echo "\n";
echo $sum(function($element){
    return $element*2;
},1,2,3,4);

//php wil automatically convert functions like foo() is instance of closures
//basically anonymous functions are instances of closures
echo "\n";
$sum1=function (closure $callback,int ...$numbers): int {
    return $callback(array_sum($numbers));
};
echo $sum1(function($element){
    return $element*2;
},1,2,3);

//the difference between closure and callback is that closure will always be anonymous function , 
//but callback can be a anonymous or normal function