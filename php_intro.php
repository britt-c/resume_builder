<?php
echo "hello PHP\n";
echo 123;
echo "\n";
?>

<?php

$page = 4;
$limit = 10;
$offset = $limit * ($page - 1);

echo $offset; 
echo "\n"
?>

<?php
function add($a, $b) {
 return $a + $b;
}

$result = add(2,2);
echo $result;
echo "\n"
?>

<?php
$fruit = array("apple", "banana", "mango");
$salad = array("fruit" => $fruit, "chef" => [] );
var_dump($fruit[0]);
var_dump($salad["fruit"]);
?>


