#!/usr/bin/php
<?php
    if ($argc < 2)
		exit();
    echo (preg_replace("/[\t\n ]+/", " ", $argv[1]))."\n";
?>