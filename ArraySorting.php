<?php
$array=array('2','4','8','5','1','7','6','9','10','3');

echo "One way to array sorting";
echo "<br>";

echo '<pre>';
echo "Unsorted array is: ";
print_r($array);

sort($array);
$arrlength = count($array);
for($x = 0; $x < $arrlength; $x++) {
     $array[$x];
}
echo "Sorted Array is: ";
print_r($array);
echo "for sorting algorithm details: https://www.cs.cmu.edu/~adamchik/15-121/lectures/Sorting%20Algorithms/sorting.html"
?>