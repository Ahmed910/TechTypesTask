<?php
 
 // if the given array is sorted
function checkInputDifferenceInList($arr, $target)
{
    $i = 0;
    $j = count($arr) - 1;
    
    while ($i < $j) {
        $diff = $arr[$j] - $arr[$i];
        //    $x 
        if ($diff == $target) {
            return true;
        }
        if($diff > $target) $i++;
        else $j--;
        
    }
}

$out = checkInputDifferenceInList([5, 7, 10, 15], 8);
echo $out;
