<?php

function removeDuplicate($str){
	$array = array();
	for($i=0; $i< strlen($str); $i++){
		if(!in_array($str[$i], $array))
			$array[] = $str[$i];
	}
	return implode("",$array);
}

echo removeDuplicate("abbcacabbbabacacc");
?>