<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/16
 * Time: 21:58
 */

$path = "../../";

//打开目录
$handle = opendir($path);

//读取条目
while ($file = readdir($handle)){
    if($file == '.' || $file == '..'){
        continue;
    }

    //绝对路径
    $realpath = $path.$file;

    //判断是否是文件
    if(is_file($realpath)){
        echo "文件：".$file."大小：".filesize($file)."<br/>";
    }
    //判断是否是目录
    if(is_dir($realpath)){
        echo '目录：'.$file."<br/>";
    }
}