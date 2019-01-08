<?php
$array=array('2','4','8','5','1','7','6','9','10','3');

echo "Unsorted array is: ";
print_r($array);
echo "<br />";

for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "Sorted Array is: ";

print_r($array);
echo "<br />";
?>