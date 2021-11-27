<?php 

session_start();
if(isset($_SESSION['email']))
{	
	$email=$_SESSION['email'];

	mysql_connect('localhost','root','');
	mysql_select_db('virtual_lab');

	$query = "SELECT `First Name` , `Last Name` , Email, Marks FROM student WHERE Email = '$email'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);

	




	echo "<div style='margin-top: 10%;'>";
	echo "<fieldset style='width: 50%;margin: auto;font-size: larger;'>";
	echo "<legend>";
	echo "First Name";
	echo "</legend>";
	echo "<center>";
	echo $row[0];
	echo "</center>";
	echo "</fieldset>";
	echo "<br>";
	echo "<fieldset style='width: 50%;margin: auto;font-size: larger;'>";
	echo "<legend>";
	echo "Last Name";
	echo "</legend>";
	echo "<center>";
	echo $row[1];
	echo "</center>";
	echo "</fieldset>";
	echo "<br>";
	echo "<fieldset style='width: 50%;margin: auto;font-size: larger;'>";
	echo "<legend>";
	echo "Email id";
	echo "</legend>";
	echo "<center>";
	echo $row[2];
	echo "</center>";
	echo "</fieldset>";
	echo "<br>";
	echo "<fieldset style='width: 50%;margin: auto;font-size: larger;'>";
	echo "<legend>";
	echo "Marks Scored in Quiz";
	echo "</legend>";
	echo "<center>";
	echo $row[3];
	echo "</center>";
	echo "</fieldset>";
	echo "<br>";
	echo "<center><span style='padding-right : 5%;'><a href='home.php'><input type='button' name='Submit' value='Back'></a></span> <span><a href='logout.php'><input type='button' name='Logout' value='Logout'></a></span></center>";
	echo "<br>";
	echo "</div>";


}
else{

 echo "<script>
			alert('Opps ... Something went wrong !!!');
			window.location.href='home.php';
			</script>
			";

}



?>