<?php

$n = 1; 
$start = (pow(10, $n-1));
$end = (pow(10, $n) - 1);
$sum = 0;
for ($i = $start; $i <= $end; $i++){ 
	if (isPalindrome($i)){ 
		$sum += $i; 
	} 
} 
function isPalindrome($num){
	$num = (string) $num;  
    $revstr = strrev($num);  
    $reverse = (int) $revstr;   
	return($num == $reverse) ? 1 : 0; 
}

echo $sum;

?>