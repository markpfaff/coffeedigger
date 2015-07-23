<?php
$link = mysqli_connect("mysql.coffeedigger.com","coffeedigger","coffeedigger#","coffeediggerdb")  or die("failed to connect to server !!");

if(isset($_REQUEST['digs']))
{
$errorMessage = "";

// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="UPDATE `coffeediggerdb`.`coffee`
SET digs = digs + 1
WHERE name = 'Awesome Coffee'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}

header("Location: index.php"); /* Redirect browser */
exit();
?>

