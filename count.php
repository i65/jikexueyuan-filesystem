<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/16
 * Time: 22:15
 */

$path = "../../";

function countdir($path){
    $size = 0;//这里好初始化，不然后面会报错
    $path = rtrim($path, '/').'/';
    $handle = opendir($path);
    while($file = readdir($handle)){
        if($file == '.' || $file == '..'){
            continue;
        }
        //绝对路径
        $realpath = $path.$file;

        //判断是否是文件夹
        if(is_dir($realpath)){
            $size += countdir($realpath);
        }else if(is_file($realpath)){//判断是否是文件
            $size += filesize($realpath);
        }

    }

    return $size;
}

echo countdir($path);