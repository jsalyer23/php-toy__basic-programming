<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  // Your code goes here.
	$sum = array_sum($arr);
	return $sum;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that the sum of numbers in $number1 returns 8.\n";
$number1 = array(1, 1, 6, -2, 2);
if (addUpNumbers($number1) == 8) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the sum of numbers in $number2 returns 27.\n";
$number2 = array(5, 8, 10, 4);
if (addUpNumbers($number2) == 27) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
