<?php

if(!function_exists("file_put_contents"))
{
    function file_put_contents($n, $d, $flag = false)
    {
        $mode = ($flag == FILE_APPEND || strtoupper($flag) == 'FILE_APPEND') ? 'a' : 'w';
        $f = @fopen($n, $mode);

        if($f === false)
        {
            return 0;
        }

        else
        {
            if(is_array($d))
                $d = implode($d);

            $bytes_written = fwrite($f, $d);
            fclose($f);
            return $bytes_written;
        }
    }
}

$text=file_get_contents($argv[1]);
//echo '%%'.$text;
$filename = $argv[1];
$newtext = substr(strrchr($text, '<?'), 0);
if ($newtext!='')
{
	@unlink($filename); //删除旧目录下的文件
	//echo $newtext;
	//exit;
	file_put_contents($filename, $newtext);
	echo "#Fix ".$filename;
}

?>