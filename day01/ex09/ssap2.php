#!/usr/bin/php
<?php

    $arr            = [];
    $tmp_arr        = [];
    $tmp_tmp_arr    = [];

    unset($argv[0]);
    foreach ($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            if (ctype_alpha($v2))
                $arr[] = $v2;           
    }
    usort($arr, 'strcasecmp');


    foreach ($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            if (ctype_digit($v2))
                $tmp_arr[] = $v2;           
    }
    sort($tmp_arr, SORT_NUMERIC);
    array_reverse($tmp_arr);


    foreach ($argv as $v){
        $tmp = array_filter(explode(' ', $v));
        foreach ($tmp as $v2)
            if (!ctype_digit($v2) && !ctype_alpha($v2))
                $tmp_arr[] = $v2; 
    }
    sort($tmp_tmp_arr, SORT_NATURAL);
    array_reverse($tmp_tmp_arr);


    foreach($tmp_arr as $v) {
        $arr[] = $v;
    }
    foreach($tmp_tmp_arr as $v) {
        $arr[] = $v;
    }

    foreach ($arr as $a)
        echo $a."\n";
?>