<?php
// I have tries for 4 hours but I face some problems and this final try ...
// I will try again to find a better solution later ...
function merge(&$arrToSorted, $r,$l,$target)
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
    $x=0;

    while ($i < count($arr1) && $j < count($arr2)) {

        $element1 = $arr1[$i];
        $element2 = $arr2[$j];
        $diff = $element1 - $element2;
  
        // die;
        if($target == $diff || $target == -$diff) return true;
        if ($arr2[$j] < $arr1[$i]) {
            
            $arrToSorted[$x] = $arr2[$j];
            $j++;
            $x++;
           
        } else {
            $arrToSorted[$x] = $arr1[$i];
            $i++;
            $x++;
        }
        
    }
    while ($i < count($arr1)) {
        $diff = $arr1[$i];
        if($target == $diff || $target == -$diff) return true;
        $arrToSorted[$x] = $arr1[$i];
        $i++;
        $x++;
    }
    while ($j < count($arr2)) {
        $diff = $arr2[$j];
        if($target == $diff || $target == -$diff) return true;
        $arrToSorted[$x] = $arr2[$j];
        $j++;
        $x++;
    }

    return $arrToSorted;
}

function mergeSort(&$arr, $r, $l,$target)
{

    
    if ($r < $l) {
        $m = ($r + $l) / 2;
        mergeSort($arr, $r, $m - 1,$target);
        mergeSort($arr, $m, $l,$target);
         merge($arr,$r,$l,$target);
    }
    // return $x;
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

$sortedArr = mergeSort($arrToSort,0,count($arrToSort),6);
print_r($arrToSort);
// $arr = [5, 8, 15, 30];
// $arr0 = [3, 9, 12, 20, 40, 50];
// $a = merge($arr, $arr0);
// print_r($a);
