<?php

    error_reporting(0);
    include "1.php";
    $a = @$_REQUEST['hello'];
    eval( "var_dump($a);");
    highlight_string(file_get_contents("text.php"));
?>
