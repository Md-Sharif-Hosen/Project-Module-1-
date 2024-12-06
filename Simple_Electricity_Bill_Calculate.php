<?php
/*
! Simple Electricity Bill Calculator
* Concepts Used: Variables, If-Else
* Description:
* Use a variable for units consumed.
* Define slabs for billing using if-else (e.g., 1–100 units = $5, 101–200 units = $10,  201 to above units = $15).
* Calculate and display the total bill based on the entered units.
*/

echo "Enter Units you Consumed: ";
$units = (float)readline();

if ($units <= 100) {
    $bill = $units * 5;
} elseif ($units <= 200) {
    $bill = 100 * 5 + ($units - 100) * 10;
} else {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
}

echo "Your Total Electricity Bill is: $$bill";
