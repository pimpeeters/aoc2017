<?php

$a = array(0);

$step = 359;
$pos = 0;


for($i = 1; $i <= 50000000; $i++){
	
	
	$pos = ($pos + $step) % count($a);
	
	
	//echo 'pos:' . $pos . '<br>';
	
	$a1 = array_slice($a, 0, $pos + 1);
	$a2 = array($i);
	$a3 = array_slice($a, $pos + 1, count($a) - $pos);

	//echo implode('', $a1) . ' ' . implode('', $a2) . ' ' . implode('', $a3) . '<br>';
		

	
	$a = array_merge($a1, $a2 ,$a3);  
	
	$pos++;


	//echo '<hr>';
	
}

echo $a[array_search(0, $a) + 1];