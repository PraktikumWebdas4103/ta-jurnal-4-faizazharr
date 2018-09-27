<form method="POST" action="">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<input type="submit" name="login" value="masuk"><br>
	</table>
</form>
<?php 
if (isset($_POST['login'])) {
	$user = array('faiz');
	$pass = array('faiz');
	$u = $_POST['user']; 
	$p = $_POST['password'];
	if (in_array($u, $user) && in_array($p, $pass)) {
		exec('proses.php');
	}else{
		echo "maaf username atau password anda salah";
	}
}
?>
