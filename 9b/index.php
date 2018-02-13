
<?php
$str = file_get_contents('../9a/input.txt');


for($i = 0; $i < strlen(trim($str)); $i++){
	
	if($str[$i] == '!'){
		$str[$i] = ' ';
		$str[$i + 1] = ' ';
	}
	
}
$instr = str_replace(' ', '', trim($str));

echo $instr;

$in_garbage = false;

$g_sum = 0;


for($i = 0; $i < strlen($instr); $i++){
	
	if($in_garbage){		
		if($instr[$i] != '>'){
			$g_sum++;
		}
	
		if($instr[$i] == '>'){
			$in_garbage = false;
		}else{
			
		}
		$instr[$i] = ' ';
	}else{
		if($instr[$i] == '<'){
			$in_garbage = true;
			$instr[$i] = ' ';
			
		}
	
	}
}

echo $g_sum;

exit();

$acc = str_replace(' ','', $instr);

$depth = 0;
$sum = 0;
for($i = 0; $i < strlen($acc); $i++){
	
	if($acc[$i] == '{'){
		$depth++;
	}elseif($acc[$i] == '}'){
		$sum += $depth;
		$depth--;
	}
	
	
}

echo $sum;