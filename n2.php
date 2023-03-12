<?php
// I take 20 minute to finish this task.
function checkInputDifferenceInList($arr,$x)
{
	for($i=0;$i<count($arr);$i++){
		for($j=$i+1;$j<count($arr);$j++){
			$diff = $arr[$i] - $arr[$j];
			if($x == $diff || $x == -$diff){
				return true;
			}
			
		}
	}
}
$out = checkInputDifferenceInList([5,7,10],-5);
echo $out;
?>