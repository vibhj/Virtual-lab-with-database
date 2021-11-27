<?php

session_start();

if(isset($_SESSION['email']))
{
	$a1 = $a2 = $a3 = $a4 = $a5 = $res = "";
	$a1 = $_POST['q1'];
	$a2 = $_POST['q2'];
	$a3 = $_POST['q3'];
	$a4 = $_POST['q4'];
	$a5 = $_POST['q5'];
	$email = $_SESSION['email'];

	$res = $a1 + $a2 + $a3 + $a4 + $a5;

	mysql_connect('localhost','root','');
	mysql_select_db('virtual_lab');

		$query = "UPDATE student SET Marks='$res' Where Email='$email'";
		mysql_query($query);

		echo "<script>";
		echo "alert('Hey... ";
		echo $email;
		echo " your scored is ";
		echo $res;
		echo " out of 5.');";
		echo "window.location.href='Quiz.php'";
		echo "</script>";
	
}
else {

	echo "<script>";
	echo "alert('Something went wrong try again !!!');";
	echo "window.location.href='Quiz.php'";
	echo "</script>";

}



?>