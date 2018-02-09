<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family:sans-serif;
            background-color: azure;
        }
    </style>
</head>
<?php

/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/





// 01. Create and Call at least one function.

function printTxt() {
    echo "This is my assignment for Loops, Arrays, and Functions";
}

printTxt();



// 02. Create a For Loop

print "<p>This should count to 5</p>";
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
} 


// 03. Create a While Loop
print "<p>This should count to 10</p>";
$y = 0;
while($y <= 10) {
    echo "The number is: $y <br>";
    $y++;
} 

// 04. Create an Array


$games = array("Overwatch", "VRChat", "Undertale", "Fallout");


// 05. Sort an Array

sort($games);
echo "<p> My favorite games are:";
$clength = count($games);
echo "<ul>";
for($x = 0; $x < $clength; $x++) {
    echo "<li>";
    echo $games[$x];
    echo "</li>";
    echo "<br>";
}
echo "</ul>";
// 06. Create a Switch Statement

$favGame = "Overwatch";

switch ($favGame) {
    case "Overwatch":
        echo "My favorite game is Overwatch!";
        break;
    case "VRChat":
        echo "My favorite game is VRChat!";
        break;
    case "Undertale":
        echo "My favorite game is Undertale!";
        break;
    case "Fallout":
        echo "My favorite game is Fallout!";
        break;
    default:
        echo "I have no favorite game because I love them all";
}

?>
<body>
    
</body>
</html>