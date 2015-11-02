<?php
$myArray = array("do", "re", "mi"); // declares the array

echo $myArray[0]; // outputs "do"

$myArray[1] = "la"; // modifies position 1 (re)

//"do", "la", "re", "mi",
echo $myArray[1]; // outputs "la"

unset($myArray[2]); // removes the array in position 2

foreach($myArray as $x) {
    print "<p>$x</p>";
}

?>