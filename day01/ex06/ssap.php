#!/usr/bin/php
<?php
    $arr = [];
    unset($argv[0]);
    foreach($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            $arr[] = $v2;
    }
    sort($arr);
    foreach ($arr as $a)
		echo $a."\n";
?>