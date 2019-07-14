#!/usr/bin/php
<?php
    if ($argc === 4 ) {
        if (trim($argv[2]) == "+") {
            echo (int)$argv[1] + (int)$argv[3] . "\n";
        } else if (trim($argv[2]) == "-") {
            echo (int)$argv[1] - (int)$argv[3] . "\n";
        } else if (trim($argv[2]) == '*') {
            echo (int)$argv[1] * (int)$argv[3] . "\n";
        } else if (trim($argv[2]) == '%') {
            echo (int)$argv[1] % (int)$argv[3] . "\n";
        } else if (trim($argv[2]) == '/') {
            echo (int)$argv[1] / (int)$argv[3] . "\n";
        }
    } else
        echo "Wrong number of arguments\n";
?>