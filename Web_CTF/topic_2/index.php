<?php

error_reporting(0);

$num = $_GET['num'];

if (!is_numeric($num)) {

	echo $num . "<br>";
	
	if ($num == 1) {

		echo 'flag{bugku-789-ps-ssdf}<br><br>';
	}

} else {

	echo "NG<br><br>";
}


echo '$num=$_GET[\'num\'];<br>';
echo 'if(!is_numeric($num))<br>';
echo '{<br>';
echo 'echo $num;<br>';
echo 'if($num==1)<br>';
echo 'echo \'flag{**********}\';<br>';
echo '}<br>';

?>
