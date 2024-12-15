<?php
#Variable, Anonymous, Callable, Closure & Arrow Functions In PHP - Full PHP 8 Tutorial
#Variable functions
/**
 * php supports a concept called variable function, it simply means 
 * you can  call function from variables by appending parantheses next to variable
 * 
 */

 function sum(int|float ...$numbers):int|float {
    return array_sum($numbers);
 }
 $x='sum';
 
 echo $x(1,2,3,4);
 echo "\n";
 //is_callable is used to check if function exists or not

 if(is_callable($x)){
    echo $x(1,2,3,4);
 }
 else{
    echo "function does not exist";
 }
#Anonymous functions
//anonymous function is also known as lembda function
$f=function(int ...$x){
return array_sum($x);
};
echo "\n Calling Anonymous function\n";
echo $f(1,2,3,4);;


//you can also pass the anonymous function  an argument to other function , and return them from another function
//functions has local scope meaning that if you try to access a varible from out of its local scope you will get error
//you can access the variable from  its parent scope in anonymus function using use keyword and passing the variable ex. use($x)

$var1=1;
$fun1=function (int|float ...$m) use($var1):int|float{
   $var1=15;
return array_sum($m);
};
echo "\n";
echo $fun1(1,2,3,4)."\n";
echo "Value of var1={$var1}"; //here value of $var1 will not be chnged from function , because use() pass arguments as value not by reference

//we can also pass reference of globle varibale ex use(&$var1)

$var2=1;
$fun2=function (int|float ...$m) use(&$var2):int|float{
   $var2=15;
return array_sum($m);
};
echo "\n";
echo $fun2(1,2,3,4)."\n";
echo "Value of var2={$var2}"; //here value of $var2 will  be chnged from function i.e from 1 to 15


//Callable Function

//when a function is passes as an argument to another function and then it is called with in that function , it is called , callback function
//php has lots of builtin function that expect  callback function as an argument as arary_map(), array_finter() and so on

//array_map(callback:callable,aray)
//callable type is new datatype, it just a basic callble function you pass
//there are few ways , you can pass a callback function as an argument
//1-define anonymus function directly
$arr3=[1,2,3,4,5];
$arr4=array_map(function($number){
return $number*2;
},
$arr3);
print_r($arr3);
print_r($arr4);

//2-assigning anonymous function to a variable and pass them

$fun5=function($number){
   return $number*2;
   };
   $arr6=array_map($fun5,$arr3);
   print_r($arr3);
   print_r($arr6);

   //3-defining a function with name , and pass the name of functio as argument
   function myFunction($number){
      return $number*2;
   }
   $arr7=array_map('myFunction',$arr3);
   print_r($arr3);
   print_r($arr6);


#Closures & accessing variables from the parent scope
#Callable data type & callback functions
#Closure vs callable
#Arrow functions