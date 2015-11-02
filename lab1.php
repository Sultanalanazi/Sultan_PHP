<!DOCTYPE html>
<head>
    <title> Lab 1 </title>
</head>
<body>
<?php

$age = 19;

if ($age >= 16) {
    print "<p>You are allowed to buy specs";
}
else {
    print "<p>You are not allowed to buy specs</p>";
}

if ($age >= 18) {
    print "<p>you are allowed to buy mugs";
}
else {
        print "<p>You are not allowed to buy mugs</p>";

}
$wantedgood="mugs";
if ($wantedgood=="mugs") {
    print"<p>you have to be 18 to buy mugs</p>";
}
if ($age >= 21) {
    print"<p>you are allowed to buy sausage rolls";
}
else {
        print "<p>You are not allowed to buy sausage rolls</p>";

}

$numberOfHobbits = 2;

switch ($numberOfHobbits) {
    case 1:
        echo "1 sad hobbit";
        break;
    case 2:
        echo "2 happy hobbits";
        break;
    case 3:
        echo "3 hobbits are a crowd";
        break;
    default:
        echo "All the hobbits have gone home";
}

?>
</body>
