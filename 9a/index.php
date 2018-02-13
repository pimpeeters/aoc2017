
<?php
$str = file_get_contents('input.txt');
for($i = 0; $i < strlen(trim($str)); $i++){
	
	if($str[$i] == '!'){
		$str[$i] = ' ';
		$str[$i + 1] = ' ';
	}elseif(!in_array($str[$i], array('<', '>', '{', '}'))){
		$str[$i] = ' ';
	}
	
}
$instr = str_replace(' ', '', $str);

$in_garbage = false;
for($i = 0; $i < strlen($instr); $i++){
	
	if($in_garbage){		
		if($instr[$i] == '>'){
			$in_garbage = false;
		}
		$instr[$i] = ' ';
	}else{
		if($instr[$i] == '<'){
			$in_garbage = true;
			$instr[$i] = ' ';
		}
	
	}
}

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