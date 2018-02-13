<?php

set_time_limit(600);

$a = 65;
$b = 8921;

$ma =  (16807);
$mb =  (48271);

$mod = 2147483647;

$m = 0b1111111111111111;

$j = 0;

for($i = 0; $i < 40000000; $i++){
	$a = ($a * $ma) % $mod;
	$b = ($b * $mb) % $mod;	
	
	if(substr(decbin($a), -16) == substr(decbin($b), -16)){
		$j++;
	}
	
}

echo $j;