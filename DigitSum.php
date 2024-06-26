<?php
// Function to sum the digits of a number
function sumDigits($number)
{
  $sum = 0;

  for ($i = 0; $i < strlen($number); $i++) {
    $sum += intval($number[$i]);
  }

  return $sum;
}

// Prompt the user to enter a number
echo "Enter a number to add its digits: ";
$number = trim(fgets(STDIN)); // Read input from the command line

// Calculate the sum of the digits
$sum = sumDigits($number);

// Output the result
echo "The sum of the digits is: " . $sum . "\n";
