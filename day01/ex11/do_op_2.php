#!/usr/bin/php
<?php
    if ($argc === 2) {
        $first_digit    = '';
        $operator       = '';
        $second_digit   = '';

        for ($i = 0; $i < strlen($argv[1]); $i++){
            $v = $argv[1][$i];
            if ($operator == "" && $second_digit == "" && ctype_digit($v)) {
                $first_digit .= $v;
            } else if ($first_digit != "" && $second_digit == ""
                && ($v == '+' || $v == '-' || $v == '*' || $v == '/' || $v == '%')) {
                    $operator .= $v;
            } else if ($first_digit != "" && $operator != "" && ctype_digit($v)) {
                $second_digit .= $v;
            } else if ($v == ' ') {
                ;
            } else {
                echo "Syntax error\n";
                exit;
            }
        }

        if ($first_digit === '' || $operator === '' || $second_digit === '') {
            echo "Syntax error\n";
            exit;
        }

        $first_digit    = (int)$first_digit;
        $second_digit   = (int)$second_digit;

        if ($operator == "+") {
            echo $first_digit + $second_digit . "\n";
        } else if ($operator == "-") {
            echo $first_digit - $second_digit . "\n";
        } else if ($operator == '*') {
            echo $first_digit * $second_digit . "\n";
        } else if ($operator == '%') {
            echo $first_digit % $second_digit . "\n";
        } else if ($operator == '/') {
            echo $first_digit / $second_digit . "\n";
        }
    } else
        echo "Incorrect Parameters\n";
?>