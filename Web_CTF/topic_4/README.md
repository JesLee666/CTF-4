```php
<?php
    include "flag.php";
    $a = @$_REQUEST['hello'];
    eval( "var_dump($a);");
    show_source(__FILE__);
?> 

```

> X = [x.md](https://github.com/evilH2O2/CTF/blob/master/Web_CTF/topic_4/x.md)
