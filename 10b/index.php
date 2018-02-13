<?php

$res = range(0, 255);

$str = '225,171,131,2,35,5,0,13,1,246,54,97,255,98,254,110';


$len = array();

for($i = 0; $i < strlen($str); $i++){
	
	$len[] = ord($str[$i]);
	
}


$len = array_merge($len, array(17, 31, 73, 47, 23));


$skip_size = 0;

$pos = 0;

for($r = 0; $r < 64; $r++){

	for($i = 0; $i < count($len); $i++){
		
		$new_list = array_reverse(array_slice(array_merge($res, $res), $pos, $len[$i]));
		
		
		for($j = 0; $j < count($new_list); $j++){
			
			$res[($pos + $j) % count($res)] = $new_list[$j];
			
		}
		$pos = ($pos + $skip_size + $len[$i]) % count($res);
		$skip_size++;
		
		
		
	}

}

var_dump($res);

$dense = array();

for($i = 0; $i < 16; $i++){
	$a = array_slice($res, $i * 16, ($i + 1)*16);
	$dense[$i] = $a[0];
	for($j = 1; $j < 16; $j++){
		$dense[$i] ^= $a[$j];
	}
	
}

$output = '';

var_dump($dense);

for($i = 0; $i < count($dense); $i++){
	$hex = dechex ($dense[$i]);
	if(strlen($hex) == 1){
		$output .= '0';
	}
	$output .= $hex;
}
var_dump($output);
