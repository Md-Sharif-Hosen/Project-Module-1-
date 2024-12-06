<?php
/*
 ! Basic Authentication System
   * Concepts Used: Variables, Constants, If-Else
   * Description:
   * Use constants to store a predefined username and password.
   * Use variables to simulate a login attempt by assigning user input values.
   * Use if-else to check if the credentials match the stored constants and display success or failure messages. 
 */

define("USER_NAME", "ADMIN");
define("PASSWORD", 'sharif39');


echo "Enter UserName: ";
//  $username = trim(fgets(STDIN));
$username = readline();

echo "Enter Password: ";
$password = trim(fgets(STDIN));

if ($username == USER_NAME && $password == PASSWORD) {
    echo "Login Successful!";
} elseif ($username == USER_NAME && $password != PASSWORD) {
    echo "Incorrect Password!";
} elseif ($username != USER_NAME && $password == PASSWORD) {
    echo "Invalid Username!";
} else {
    echo "Both Username and Password are incorrect!";
}
?>

?>