<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  // Your code goes here.
	$uppercased = strtoupper($str);
	return $uppercased;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting that how are you! becomes all uppercased. Should return HOW ARE YOU!.\n";
if (uppercasesAllLetters("how are you!") == "HOW ARE YOU!") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that BiG BaD wolf becomes all uppercased. Should return BIG BAD WOLF.\n";
if (uppercasesAllLetters("BiG BaD wolf") == "BIG BAD WOLF") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
