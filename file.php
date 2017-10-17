<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/17
 * Time: 19:10
 */

//文件的基本操作

//注意：读的时候，不能同时也写，读写不能同时进行

//打开文件
$handle = fopen('./data.txt', 'r+');

//写入文件
//$len = fwrite($handle, 'abcdefghijklmnopqrstuvwxyz', 7);

//读取文件
$size = filesize('./data.txt');
$str = fread($handle, $size);
var_dump($str);

//关闭文件
fclose($handle);