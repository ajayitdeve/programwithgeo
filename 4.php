<?php
/**
 * Varibale can re-assigned another value after declaration
 *but constants can not reasigned 
 */
$name = "ajay";
echo $name;
echo "<br/>";
$name = "raj";
echo $name;

#CONSTANTS

/**
 * Constants can be defined by either define('name','value') or const 
 * define function declares constatnts at RUN time while const decleare in COMPILE time
 * So, Constatnts defined with define function can be used in control structure.
 * Constants Defined with const keyword can not be used inn control structure as it is defined in compile tilme
 * The naming convention for Constants are in UPPERCASE
 * we donot prefix $ before constants to print or access there value
 * we can check that a constant is defined or not using defined function , 
 * it takes constant nae as argument and return boolean true or false 
 */

define("STATUS", "PAID");
echo "<br/>";
echo STATUS;
echo "<br/>";
echo defined("STATUS"); //will return 1:true

const STATUS_PAID="paid";
echo "<br/>";
echo STATUS_PAID;

echo "<br/>Dynamic declaration of constants";

$status="FAIL";
define("STATUS_".$status,"FAILED");
echo "<br/>";
echo STATUS_FAIL;

echo "<br/>PHP provide some Predefined and Magic Constants<br/>";
echo PHP_VERSION;
echo "<br/>Magic Constant<br/> ". PHP_VERSION;

//php development server : php -S 127.1.0.1:83