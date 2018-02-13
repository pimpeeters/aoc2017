<?php

set_time_limit(100000);


$a = array(0);

$step = 359;
$pos = 0;

$max = 50000000;


for($i = 1; $i <= $max; $i++){
	
	
	$pos = ($pos + $step) % $i;
	
	array_splice( $a, $pos + 1, 0, $i );
	
	$pos++;

	if($i % 1000 == 0){
		echo $i . ' ';
		flush();
		ob_flush();
	}
	
	
	echo implode('', $a) . '<br>';
	
}

echo '<hr>';




echo $a[array_search(0, $a) + 1];