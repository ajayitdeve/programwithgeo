<?php
//declare(strict_types=1);
#How To Create Functions In PHP - Functions Tutorial - Full PHP 8 Tutorial
#Creating functions
function foo()
{
    echo "hello";
}
//Invoking or calling function
foo();
echo "\n";
// Return values from functions
function foo1()
{
    return "hello";
}
$x = foo1();
echo $x; // or echo $foo1

# Where to define functions, function can be defined any where , 

echo foo2();
function foo2()
{
    echo "\n foo2 called";
}

#Declaring functions conditionally

if (true) {
    function foo3()
    {
        echo "\n foo3 called";
    }
}

foo3();//if above condition is false , it will throw error

# Inner functions
foo4();
bar(); 
//first we have to call foo4() out function and then bar() inner function 
//if foo4() is commented then it will throw error
function foo4(){
    echo "\n Foo 4";
    function bar(){
        echo "\n Bar";
    }
}

//Function can not have same name

# Return types & strict types
//we can type hint the return value

function foo5():int{
    return 1;
}
function foo6():int{
    return '2';//this will throw error if strict type enabled
}

# Nullable types

function foo7():void{
    return ;
}

//if you type hint void and remove the return statement it will still work
function foo8():void{

}
//but if if type hint void and return null it will not work
function foo9():void{
   // return null;  this line will throw error
}


//if you want to return type hinting int and nullable also . ? is used before datatype
function foo10():?int{
    return null;
}
#Union types (type hinting multiple types)
//since php8 we can type hint multiple type seperated by | pipe

function foo11():int|float|array{
    return [1,2,3];
}

# Mixed Type
//if we want to type hint multiple data types then in php8 mixed is available

function foo12():mixed{
    return 'hi';
    //return [1,2,3];
}
//we can not use nullable with mixed   ?mixed is not valid