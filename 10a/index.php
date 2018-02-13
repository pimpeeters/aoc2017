<?php

$res = range(0, 255);

$len = explode(',','225,171,131,2,35,5,0,13,1,246,54,97,255,98,254,110');

$skip_size = 0;

$pos = 0;

for($i = 0; $i < count($len); $i++){
	
	$new_list = array_reverse(array_slice(array_merge($res, $res), $pos, $len[$i]));
	
	
	for($j = 0; $j < count($new_list); $j++){
		
		$res[($pos + $j) % count($res)] = $new_list[$j];
		
	}
	$pos = ($pos + $skip_size + $len[$i]) % count($res);
	$skip_size++;
	
	
	
}

echo $res[0] * $res[1];