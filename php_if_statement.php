<?php
// A simple PHP program
echo "Enter a number: ";
$input = rtrim(fgets(STDIN));
$number = (int)$input;
if ($number > 10) {
 echo "Big number\n";
} else {
 echo "Little number\n";
}
?>
