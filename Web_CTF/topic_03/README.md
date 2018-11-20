```php
<?php

// filename: code.php
// topic : session反序列化
// flag in directory

ini_set('session.serialize_handler', 'php'); 
session_start();
class OowoO
{
   public $mdzz;
   function __construct()  
   {
	   $this->mdzz = 'phpinfo();';
   }
   function __destruct()  
   {
	   eval($this->mdzz);
   }
}
if(isset($_GET['phpinfo']))
{
   $m = new OowoO();
}
else
{
   highlight_string(file_get_contents('index.php')); 
}


?>

```


> X = [x.md](https://github.com/evilH2O2/CTF/blob/master/Web_CTF/topic_03/x.md)
