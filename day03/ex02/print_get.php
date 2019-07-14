<?php
	if (sizeof($_GET))
		foreach ($_GET as $k => $v)
			echo $k . ": $v\n";
?>