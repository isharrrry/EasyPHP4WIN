<?php
//echo "#".$argv[1];
/*
$dir=dirname($argv[1]);
$obj=$dir.'/index.php';
@unlink($obj); //删除旧目录下的文件
rename($argv[1],$obj);
echo "#Move ".$obj;
*/

$dir=dirname($argv[1]);
$filename = $argv[1];
$houzhui = substr(strrchr($filename, '.'), 1);
$obj = $dir.'/'.basename($filename,".".$houzhui).'.php';
@unlink($obj); //删除旧目录下的文件
rename($argv[1],$obj);
echo "#Move ".$obj;

?>