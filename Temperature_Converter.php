<?php 
   /*  
   ! Temperature Converter
    * Concepts Used: Variables, Constants, Switch
    * Description:
    * Use a constant for the conversion formula.
    * Ask the user to enter a temperature value in Celsius or Fahrenheit through PHP’s readline() function in the terminal.
    * Use a switch statement to select the type of conversion (Celsius to Fahrenheit or Fahrenheit to Celsius). */

    // Fahrenheit = Celsius * 9/5 + 32
    // Celsius = (Fahrenheit - 32) * 5/9

    define("FACTOR", 5/9);
    define("OFFSET", 32);

    echo "Enter a temperature value: ";
    $temperature =(float)readline();

    echo "Convert to (1.Fahrenheit or 2.Celsius) ";
    $option =(int)readline();

    switch($option){
        case 1:
            echo $temperature. "°C = ". ($temperature * FACTOR + OFFSET). "°F";
            break;
        case 2:
            echo $temperature. "°F = ". ($temperature - OFFSET) * FACTOR. "°C";
            break;
        default:
            echo "Invalid option. Please choose 1 or 2.";
    }
?>