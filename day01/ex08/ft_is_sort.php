#!/usr/bin/php
<?php
    function ft_is_sort($arr){
        $arr_sort = $arr;
        sort($arr_sort);
        if (array_diff_assoc($arr_sort, $arr) == null)
            return true;
        return false;
	}
?>