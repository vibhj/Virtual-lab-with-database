<?php 

$f=$_POST['first_name'];
$l=$_POST['last_name'];
$e=$_POST['email'];
$p=$_POST['password'];

mysql_connect('localhost','root','');
mysql_select_db('virtual_lab');

$query = "Select * from student Where Email = '$e'";
$result = mysql_query($query);
$count = mysql_num_rows($result);

if($count == 0){

	$query1 = "Insert into student values ('$f','$l','$e','You did not attend the quiz yet !!!','$p')";
	mysql_query($query1);
	echo "<script>
	alert('You are successfully registerd ... Now Login !!!');
	window.location.href='Login.php';
	</script>";
	
}

else{

	echo "<script>
	alert('User already exit !!!')
	window.location.href='Signup.php';
	</script>";
	
}
?>