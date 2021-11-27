<?php
session_start();

if(isset($_SESSION['email']))
{

	$email = $_SESSION['email'];
	
	echo "

		<!DOCTYPE html>
<html>
<head>
	<title>Operating System</title>
    
    <!-- CSS only -->
    <link href='https://fonts.googleapis.com/css?family=Lato&display=swap' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
   
   <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	
	
	<link rel='stylesheet' type='text/css' href='About.css'>
        
    
		

	<style type='text/css'>
		nav{
			font-family: lato;
		}
		.nav-item{
			font-size: 20px;
			padding-left: 10px;
		}
	</style>
	
</head>
<body>
	<nav class='navbar fixed-top navbar-expand-lg navbar-dark' style='background-color: #262626;'>
  <a class='navbar-brand' href='#' class='navbar-brand'> <i class='fa fa-book' aria-hidden='true'></i>VirtualLab</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
        <li class='nav-item'><a class='nav-link' href='home.php'><i class='fa fa-home' aria-hidden='true'></i>Home</a></li>
        <li class='nav-item active'><a class='nav-link' href='aboutus.php'>About Us</a></li>
        <li class='nav-item'><a class='nav-link' href='Quiz.php'>Quiz</a></li>
        <li class='nav-item'><a class='nav-link'href='https://www.google.com/' target='_blank'><i class='fa fa-search' aria-hidden='true'></i>Search</a></li>
      </ul>
    <ul class='navbar-nav ml-auto'>
			<li class='nav-item dropdown'>
        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          <img src='account.png' class='userpicture defaultuserpic' width='35' height='35' aria-hidden='true' style='border-radius: 50%; vertical-align: middle;'>
        </a>
        <div class='dropdown-menu dropdown-menu-md-right' aria-labelledby='navbarDropdown'>
          <span class='dropdown-item'>Signed in as <b>";echo $email;echo "</b></span>
          <a class='dropdown-item' href='profile.php'>Your profile</a>
          <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='logout.php'>Logout</a>
        </div>
    </li>
		</ul>

    

  </div>
</nav>
    
<br>
<br>
<br>


<div class='container'>
	<div class='row'>


		<div class='col-lg-6'>
				<div>
	<p>
		<h1><b>About Us</b></h1>

		<br>

    </p>
    </div>

    <div>
    	<p>
    		<h2><b>Our Genesis</b></h2>
    	</p>
    	<p>
    		<h3>We strive to make quality education affordable to the masses. Over the years,
    		 the cost of education has increased many folds to make it beyond the reach of 
    		 many. You may be appalled to learn that even in most developed nations students 
    		 resort to prostitution to pay up for their college tuition fees. We want to remove 
    		 this financial barrier to a good education. The only barrier to education must be an
    		 individual’s thirst for knowledge.</h3><br>
    	</p>
    </div>
			
		</div>



		<div class='col-lg-6'>
			<br>
				<img style='width:100%; height: 100%;' src='1.gif '>
		</div>

		
		
	</div>
</div>

<br>
<br>

<div class='container'>
	<div class='row'>
		<div class='col-lg-6' >
			<br>
			<br>
			<br>
			<img class='profile' style='width:75%; height: 75%;' src='Vibhanshu.jpg' class='px-auto'>
		</div>
		<div class='col-lg-6'>
			<p>
    		<h2><b>Our Founder</b></h2>
    	</p>
    	<br>
    	<p>
    		    <h3>Hey, I am Vibhanshu. I am a third-year undergraduate and currently pursuing a major in Information Technology Engineering from ABES Engineering College, Ghaziabad, India. I have a problem-solving mindset. I am pretty handy with tools such as HTML, CSS, Bootstrap, and little bit JavaScript. My passion is learning new things, and my hobbies are travelling and playing online games.</h3><br>
    	</p>
		</div>
	</div>
</div>


<br>
<br>

<div class='container'>
	<div class='row'>
		<div class='col-lg-6'>

			<div>
    	<p>
    		<h2><b>Get in Touch</b></h2>
    	</p>
    	<br>
    	<p>
    	  <h3>We have a presence in all popular social channels. Join us on below-listed channels, say hello to us, and stay updated!</h3><br>
    	</p>
    </div>
    <br>
    <div>
    	<ul>
    		<h3>
    			<li>Like us on <a href='https://www.facebook.com/vibhanshu.jaiswal.142'><i class='fa fa-facebook-official' aria-hidden='true'></i>acebook</a></li><br>
    			<li>Follow us on <a href='https://twitter.com/Vibhanshu_jaiz'><i class='fa fa-twitter' aria-hidden='true'></i> Twitter</a></li><br>
    		</h3>
    	</ul>

    </div>
			
		</div>
		<div class='col-lg-6'>
			<br>
			<img style='width:100%; height: 75%;' src='2.gif'>
		</div>
	</div>
</div>


<div class='container'>
	<div class='row'>
		<div class='col-lg-6'>
			
			<img class='profile' style='width:75%; height: 75%;' src='3.gif'>
		</div>
		<div class='col-lg-6'>
			<div>
    	<p>
    		<br>
    		<h2><b>Any Suggestions for Us?</b></h2>
    	</p>
    	<br>
    	<p>
    	  <h3>If you have any feedback or advice for us, we would love to listen to it. Any ideas,<br> topics for tutorials, or any bug that you encountered while using this site are also <br>welcome.</h3><br>
    	  <br>
    	  <form action='feedback.php' method='POST'>
               <textarea name='message' rows='5' cols='50' class='form-control' placeholder='Any comments !!! ' required></textarea>
                <br><br>
                       <button type='submit'  value='Submit' class='btn btn-outline-info'>Submit</button>
          </form>
    	</p>
    </div>
		</div>
	</div>
</div>
   
    
	







<!-- JS, Popper.js, and jQuery -->
<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>

</body>
</html>


	";
}
else{

	header("location:Login.php");

}


?>