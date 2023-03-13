<?php
// I have tries for 4 hours but I face some problems and this final try ...
// I will try again to find a better solution later ...
function merge($arrToSorted, $r,$l)
{
     $m = ($r+$l) / 2;
    $arr1 = [];
    $arr2 = [];
     for($i=0;$i<$m-1;$i++){
         $arr1[] = $arrToSorted[$i];
     }
     for($j=$m;$j<count($arrToSorted);$j++){
         $arr2[] = $arrToSorted[$j];
     }
    $i = 0;
    $j = 0;
    $arr = [];

    while ($i < count($arr1) && $j < count($arr2)) {

        if ($arr2[$j] < $arr1[$i]) {
            $arr[] = $arr2[$j];
            $j++;
        } else {
            $arr[] = $arr1[$i];
            $i++;
        }
    }
    while ($i < count($arr1)) {
        $arr[] = $arr1[$i];
        $i++;
    }
    while ($j < count($arr2)) {
        $arr[] = $arr2[$j];
        $j++;
    }

    return $arr;
}

function mergeSort($arr, $r, $l)
{

    
    if ($r < $l) {
        $m = ($r + $l) / 2;
        mergeSort($arr, $r, $m - 1);
        mergeSort($arr, $m, $l);
        merge($arr,$r,$l);
    }
    return $arr;
    //  $m = count($arr) / 2;

    //  for($i=0;$i<$m-1;$i++){
    //      $arr1[] = $arr[$i];
    //  }
    //  for($j=$m;$j<count($arr);$j++){
    //      $arr2[] = $arr[$j];
    //  }
    //  mergeSort($arr1);
    //  mergeSort($arr2);
}

$arrToSort = [2,14,3,12,6];

$sortedArr = mergeSort($arrToSort,0,count($arrToSort));
print_r($sortedArr);
// $arr = [5, 8, 15, 30];
// $arr0 = [3, 9, 12, 20, 40, 50];
// $a = merge($arr, $arr0);
// print_r($a);
