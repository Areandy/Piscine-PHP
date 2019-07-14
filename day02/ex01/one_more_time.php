#!/usr/bin/php
<?php
	$month = [
		1 => "Janvier",
		2 => "Février",
		3 => "Mars",
		4 => "Avril",
		5 => "Mai",
		6 => "Juin",
		7 => "Juillet",
		8 => "Août",
		9 => "Septembre",
		10 => "Octobre",
		11 => "Novembre",
		12 => "Décembre"];

	$week = [
		1 => "Lundi",
		2 => "Mardi",
		3 => "Mercredi",
		4 => "Jeudi",
		5 => "Vendredi",
		6 => "Samedi",
		7 => "Dimanche"];

	if ($argc < 2)
		exit();
	$date = explode(" ", $argv[1]);
	if (count($date) != 5 ||
		preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $date[1], $date[1]) === 0 ||
		preg_match("/^[0-9]{4}$/", $date[3], $date[3]) === 0 ||
		preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4]) === 0) {
			echo "Wrong Format\n";
			exit();
	}
	$date[0] = array_search($date[0], $week);
	$date[2] = array_search($date[2], $month);
	if ($date[0] === false || $date[2] === false){
		echo "Wrong Format\n";
		exit();
	}
	$time = mktime($date[4][1], $date[4][2], $date[4][3], $date[2], $date[1][0], $date[3][0]);
	if (date( "N", $time) == $date[0])
		echo $time."\n";
	else
		echo "Wrong Format\n";
?>