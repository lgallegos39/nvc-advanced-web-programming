<html lang="en">
<head>
<meta charset="UTF-8">
<title>Test</title>
<style>
  body {
    font-family:sans-serif;
  }
  form {
    display:block;
    margin: 10em auto;
    max-width:300px;
  }
</style>
</head>
<body>
 


<!--
/*****************************************
*************  Instructions  *************
******************************************
         Fill in your responses
        to this assignment below.
*****************************************/
-->



<!--// 01. Create a form with at least 2 text inputs and a submit button-->
<form action="03-assignment.php" method="POST">
  <p>Name: <input type="text" name="first_name" value="<?php echo $_GET['first_name']; ?>"></p>
  <p>E-mail: <input type="text" name="email" value="<?php echo $_GET['email']; ?>"></p>
<input type="submit">
</form>




<!--// 02. This criterion is linked to a Learning Outcome. Display URL parameter value for "first_name" text input-->

<?php
    $nameUrl = $_GET['first_name'];
    if (isset($nameUrl)) ?>
    <?php echo ${nameUrl}?>

<!--// 03. This criterion is linked to a Learning Outcome. Display URL parameter value for "email" text input-->


<?php
    $emailUrl = $_GET['email'];
    if (isset($emailUrl)) ?>
    <?php echo ${emailUrl}?>


<!--// 04. This criterion is linked to a Learning Outcome Display POST data once form has been submitted-->
<p>Welcome, <?php echo $_POST["first_name"]; ?>.</p>
<p>Your email address is: <?php echo $_POST["email"]; ?></p>
</body>
</html>