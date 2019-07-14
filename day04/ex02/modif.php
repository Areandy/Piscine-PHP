<?php
	if (isset($_POST['login']) && isset($_POST['oldpw']) && isset($_POST['newpw'])
		&& isset($_POST['submit']) && $_POST['submit'] === "OK") {
			$account = unserialize(file_get_contents('../private/passwd'));
			if ($account) {
				$exist = false;
				foreach ($account as $k => $v) {
					if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
						$exist = true;
						$account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
					}
				}
				if ($exist) {
					file_put_contents('../private/passwd', serialize($account));
					echo "OK\n";
				} else {
					echo "ERROR\n";
				}
			} else {
				echo "ERROR\n";
			}
    } else {
        echo "ERROR\n";
	}
?>