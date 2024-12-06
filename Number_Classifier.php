<?php
/* 
! Number Classifier
* Concepts Used: Variables, If-Else
* Description:
* Input a number through the terminal or define it in the script.
* Use if-else to classify the number as positive, negative, or zero.
*/

echo "Enter a Number: ";
$number = fgets(STDIN);
// $number= readline();

if (filter_var($number, FILTER_VALIDATE_INT) !== false) {
    $number = (int)$number;
    if ($number > 0) {
        echo "The number is positive";
    } elseif ($number < 0) {
        echo "The number is negative";
    } else {
        echo "The number is zero";
    }
} else {
    echo "Invalid input. Please enter a valid integer.";
}
