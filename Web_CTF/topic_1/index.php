<?php

$flag = 'flag.txt';

extract($_GET);

if (isset($shiyan)) {

	$content = trim(file_get_contents($flag));
	if ($shiyan == $content) {
	
		echo 'flag{xxx}';
	} else {
	
		echo "Error";
	}

} else {

	echo "Oh.no";
}


?>
