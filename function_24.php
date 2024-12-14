<?php
//PHP Variable Scopes - Static Variables - Full PHP 8 Tutorial
#Variable scope
$x=10; //global scope

function foo(){
    $x= 10;//local scope
}

#Global scope

function bar(){
    $GLOBALS['x']=5;
}
bar();
echo "\n value of x={$x}";
#Local scope

#Using global keyword to access variables in the global scope

#How are global variables stored & GLOBALS superglobal

#Static variables
//static variables are regular variable with the local scope
//the deifference is that the regular get distroyed out side the scope boundary while the static variable does not get destroyed 
//and retains its value



function getValue(){
    $value=someVeryExpensiveFunction();
     echo $value;
}
function someVeryExpensiveFunction(){
    sleep(2);
    echo "calling someVeryExpensiveFunction()";
    return 10;
}

echo "\n";
echo getValue()."\n";
echo getValue()."\n";
echo getValue()."\n";

//static implimentation

function getStaticValue(){
    static $value=null;
    if($value===null){
        $value=someVeryExpensiveFunction();
    }
    return $value;
}
echo "\n";
echo getStaticValue()."\n";
echo getStaticValue()."\n";
echo getStaticValue()."\n";


