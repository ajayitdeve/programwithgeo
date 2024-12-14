<?php
#Function parameters
#Define function parameters
#Parameters vs arguments
function foo($x,$y){// here x and y is called as parameters
    return $x*$y;
}
$x=foo(4,5);//4 and 5 is known as arguments
echo $x;
#Type hinting
//as we type hint return type we can also type hint parameters
function foo1(int $x,int $y){
    return $x*$y;
}
#Union types
function foo2(int|float $x,int|string $y){
    return $x*$y;
}
 
#Default values
function foo3(int $x, int $y=10){
    return $x+$y;
}
echo "\n";
echo foo3(20);
echo "\n";
echo foo3(20,48);
#Passing arguments by value vs by reference
//call by value example
function swap_val($a,$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
$a=10;$b=20;
echo "\n Call by value";
echo "\n Before swap_val a={$a} and b={$b}";
swap_val($a,$b);
echo "\n After swap_val a={$a} and b={$b}";
//call by ref example
echo "\n--------------------------";
echo "\n Call by reference";
function swap_ref(&$a,&$b){
    $temp=$a;
    $a=$b;
    $b=$temp;
}
echo "\n Before swap_ref a={$a} and b={$b}";
swap_ref($a,$b);
echo "\n After swap_ref a={$a} and b={$b}";
#Variadic functions - splat operator - capture passed arguments
function sum(int ...$a){
    return array_sum($a);
}
echo "\n";
echo sum(10,20,30);
function sum1(int ...$a){
    $x=0;
    foreach($a as $v){
    $x=$x+$v;
    }
    return $x;
}
echo "\n";
echo sum1(100,200,300);
echo "\n";
#Argument unpacking with splat (elipsis / three dot) operator
function sum2(int ...$a){
    return array_sum($a);
}
$arr=array(1,2,3,4,5,6,7,8,9,10);
echo sum1(...$arr);

#PHP8 named arguments

function divide(int $x,int $y):int{
return $x/$y;
}
$result=divide(y:10,x:50);
$result1 =divide(x:50,y:10);
echo "\n result={$result}  result1={$result} \n";

//MOST IMP
//when you are using argument unpacking , if your array contains associative array keys 
//then those keys will be trated as arguments name

$arr2=['x'=>90,'y'=>16];
echo  divide(...$arr2);

