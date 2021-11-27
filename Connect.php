<?php 

session_start();

$e=$_POST['email'];
$p=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db('virtual_lab');

$query = "Select * from student Where Email='$e' AND Password='$p'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

if($count == 1)
{
	$_SESSION['email'] = $e;
	echo "<script>
	alert('Login Successfull ...');
	window.location.href='home.php';
	</script>";

}
else

	echo "<script>
	alert('Login Credentials doesnot match !!!');
	window.location.href='Login.php';
	</script>";

?>