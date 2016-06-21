<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function isGreaterThanFive($num) {
  // Your code goes here.
	if ($num < 5) {
  		return false;
}
	else {
		return true;
	}
}

// Write your own "tests" below. A couple examples are provided for you.

echo "\nTesting that 18 is greater than 5. Should return true.\n";
if (isGreaterThanFive(18) == true) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that 3 is greater than 5. Should return false.\n";
if (isGreaterThanFive(3) == false) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>