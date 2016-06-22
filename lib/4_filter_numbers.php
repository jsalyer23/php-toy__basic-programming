<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  // Your code goes here.
	$new_array = array();
	foreach ($arr as $each_element) {
		if ($each_element < 10){
			//$new_array[] = $each_element;
			array_push($new_array, $each_element);
		}
	}
	return $new_array;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that 10, 11, 15, and 26 are removed from the $rubber_duck array. Should return true.\n";
$rubber_duck = array(1, 5, 11, 15, 26, 10);
if (filterNumbers($rubber_duck) == array(1, 5)) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that 3, 7, 9, and 4 are removed from $quack array. Should return an empty array(true).\n";
$quack = array(77, 12, 90, 76);
if (filterNumbers($quack) == array()) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>