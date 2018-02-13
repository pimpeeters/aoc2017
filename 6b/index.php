<?php

	$str = '14	0	15	12	11	11	3	5	1	6	8	4	9	1	8	4';
	

	$nums = preg_split('/\s+/', $str);
	
	
	while(true){
		
		$array[] = implode(' ', $nums);
		//echo implode(' ', $nums) . '<hr>';
		
		$max = max($nums);
		for($i = 0; $i < count($nums); $i++){
			
			if($nums[$i] == $max){
				
				$nums[$i] = 0;
				for($j = 1; $j < ($max + 1); $j++){
					
					$nums[($i + $j) % count($nums)]++;
					
				}				
				break(1);
			}
		}
		
		if(in_array(implode(' ', $nums), $array)){
			break;
		}
		
	}
	echo array_search ( implode(' ', $nums), $array) . '<br>';
	echo count($array) . '<br>';
	echo count($array) - array_search ( implode(' ', $nums), $array);