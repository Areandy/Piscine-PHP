<?php
	session_start();
	if (isset($_GET['login']) && isset($_GET['passwd'])
		&& isset($_GET['submit']) && $_GET['submit'] === "OK"){
			$_SESSION['login'] = $_GET['login'];
			$_SESSION['passwd'] = $_GET['passwd'];
	}
	
	if (isset($_SESSION['login']))
		$log = $_SESSION['login'];
	else
		$log = '';

	if (isset($_SESSION['passwd']))
		$pass = $_SESSION['passwd'];
	else
		$pass = '';
?>
<html><body>
<form action="" method="get">
	Username: <input type="text" name="login" value="<?php echo $log; ?>">
	<br/>
	Password: <input type="password" name="passwd" value="<?php echo $pass; ?>">
	<br/>
	<input type="submit" name="submit" value="OK">
</form>
</body></html>