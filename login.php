<?php
require_once('header.php');
$error_message='';
?>
<?php
if (isset($_POST['log-in-form'])) {
    $error_message='';
	if ($_POST['admin-email'] == '' || $_POST['admin-password'] == '') {
		$error_message = 'Please give the correct email and password';
	} else {
		// $q = $pdo->prepare("
		// 			SELECT * 
		// 			FROM user 
		// 			WHERE user_email=?
		// 		");
		// $q->execute([$_POST['user_email']]);
		// $res = $q->fetchAll();
		// $total = $q->rowCount();

		if ($_POST['admin-email']== "admin@gmail.com") {
			// foreach ($res as $row) {
			// 	$stored_password = $row['user_password'];
			// }

			// if (md5($_POST['user_password']) == $stored_password) {
			// 	// Everything is fine!
			// 	$_SESSION['user'] = $row;
                if($_POST['admin-password']== "1234"){
                $_SESSION['admin']='admin';
				header('location: index.php');
				exit;
			} else {
				$error_message = 'Please give the correct password';
			}
		} else {
			$error_message = 'Please give the correct email and password';
		}
	}
}
?>


<form action="login.php" method="POST">
    <?php
    if($error_message){
        echo  '<h2>'.$error_message.'</h2>';
    }
    ?>
    <table>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" placeholder="Enter your email address" class="form-control mb-3" name="admin-email">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" type="password" name="admin-password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Log in" name="log-in-form"></td>
        </tr>
    </table>
</form>

<?php
require_once('footer.php');
?>