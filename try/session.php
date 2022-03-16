<?php
    ob_start();
    session_start();
    $_SESSION['usr']='Swati';
    echo $_SESSION['usr'];
//ignore
    //</?php
if (isset($_POST['form_login'])) {
	if ($_POST['admin_email'] == '' || $_POST['admin_password'] == '') {
		$error_message = 'Please give the correct email and password';
	} else {
		$q = $pdo->prepare("
					SELECT * 
					FROM user 
					WHERE user_email=?
				");
		$q->execute([$_POST['user_email']]);
		$res = $q->fetchAll();
		$total = $q->rowCount();

		if ($total) {
			foreach ($res as $row) {
				$stored_password = $row['user_password'];
			}

			if (md5($_POST['user_password']) == $stored_password) {
				// Everything is fine!
				$_SESSION['user'] = $row;

				header('location: index.php');
				exit;
			} else {
				$error_message = 'Please give the correct email and password';
			}
		} else {
			$error_message = 'Please give the correct email and password';
		}
	}
}
?>