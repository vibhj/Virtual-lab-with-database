<?php

session_start();


if(isset($_SESSION['email'])){

	$mesg = $_POST['message'];
	$email = $_SESSION['email'];


	mysql_connect('localhost','root','');
	mysql_select_db('virtual_lab');
	

	$query = "Select * from feedback Where Email='$email'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);

	if($count == 0){
		$query1 = "INSERT into feedback values ('$email','$mesg')";
		mysql_query($query1);
		echo "<script>
			alert('Thank you for giving your valuable feedback...');
			window.location.href='aboutus.php';
			</script>
			";
	}
	else{
		$query2 = "UPDATE feedback SET Feedback='$mesg' Where Email='$email'";
		mysql_query($query2);
		echo "<script>
			alert('Thank you for giving your valuable feedback again...');
			window.location.href='aboutus.php';
			</script>
			";
	}

}
else{

	echo "<script>
			alert('Opps ... Something went wrong !!!');
			window.location.href='aboutus.php';
			</script>
			";

}




?>