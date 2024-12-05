
<?php
// 3 Basic PHP Syntax - PHP 8 Tutorial
echo "hello";
echo "<br/>";
echo "Joe's Invoice";
echo "<br/>";
echo 'joe\'s Invoice';
echo "<br/>";
//print return 1 and echo does not
$x=print 'hello';
echo $x;
echo "<br/>";
$x="Ajay";
echo $x;
echo "<br/>";
echo "Value of x is :$x";
echo "<br/>";
//echo "Value of x is: ${x}";
echo "<br/>";
echo "Value of x is: {$x}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<body>
    <hr/>
    <?php echo $x ?>
    <br/>
    <?= $x ?>
    <br/>

   <p> <?= 'PHP echo short hand for echo' ?></p>
</body>
</html>
<?php
//there are three types of comments
//1-Single Line Comment
#this is also a single line comment
//2-Multi line Comments
/*
this is
example of 
multiline
comments
*/

//3-Doc Block --for documentation

/**
 * this is the doc block comment
 */