
```php
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

```

<br>

> solution : [x.md](https://github.com/evilH2O2/CTF/blob/master/Web_CTF/topic_1/x.md)

