<!--
/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/
-->

<!-- 01. Initiate/start a PHP session by using the script-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        
    </style>
</head>
<body>

<!-- 02. Set a value to a session-->
<?php
$_SESSION["age"] = "22";
$_SESSION["name"] = "Luis";
$_SESSION["favFood"] = "spaghetti";
?>

<!--// 03. This criterion is linked to a Learning Outcome Echo the session value to display on the page-->
<?php
// Echo session variables that were set on previous page
echo "<h2> Hello " . $_SESSION["name"] . "!</h2>";
echo "<h3> You are " . $_SESSION["age"] . " years old and your favorite food is " . $_SESSION["favFood"] . ".</h3>";
?>

</body>
</html>