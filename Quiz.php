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
  <link rel='stylesheet' type='text/css' href='Quiz.css'>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

<style type='text/css'>
  .nav-item{
      font-size: 20px;
      padding-left: 10px;
    }
    nav{
      font-family: lato;
    }
</style>
</head>
<body >
  <nav class='navbar fixed-top navbar-expand-lg navbar-dark' style='background-color: #262626;'>
  <a class='navbar-brand' href='#' class='navbar-brand'> <i class='fa fa-book' aria-hidden='true'></i>VirtualLab</a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
        <li class='nav-item'><a class='nav-link' href='home.php'><i class='fa fa-home' aria-hidden='true'></i>Home</a></li>
        <li class='nav-item'><a class='nav-link' href='aboutus.php'>About Us</a></li>
        <li class='nav-item active'><a class='nav-link' href='Quiz.php'>Quiz</a></li>
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


<div class='frame'>

<center><h2><strong><u>QUIZ</u></strong></h2></center>
<hr>


<h2>Questions & Answers :</h2>
<hr>
<form method='POST' action='marks.php'>
<p><h3>1.  ______ is used in an operating system to separate mechanism from policy.</h3>
<div class='choice'>
  <h4>
<input type='radio' value='0'  id='q1' name='q1' required > Single level implementation <br>
<input type='radio' value='1'  id='q1' name='q1' > Two level implementation <br>
<input type='radio' value='0'  id='q1' name='q1' > Multi level implementation <br>
<input type='radio' value='0'  id='q1' name='q1' > None <br>
</h4>
</div>
</p>
<hr>

<p><h3>2. The operating system creates _____ from the physical computer.</h3>
<div class='choice'>
  <h4>
<input type='radio' value='0'  id='q2' name='q2' required > Virtual space <br>
<input type='radio' value='1'  id='q2' name='q2'> Virtual computers <br>
<input type='radio' value='0'  id='q2' name='q2'> Virtual device <br>
<input type='radio' value='0'  id='q2' name='q2'> None <br>
</h4>
</div></p>
<hr>
<p><h3>3. ______ shares characteristics with both hardware and software.</h3>
<div class='choice'>
  <h4>
<input type='radio' value='1'  id='q3' name='q3' required > Operating System <br>
<input type='radio' value='0'  id='q3' name='q3'> Data <br>
<input type='radio' value='0'  id='q3' name='q3'> Software <br>
<input type='radio' value='0'  id='q3' name='q3'> None <br>
</h4>
</div></p>
<hr>

<p><h3>4. Multiprogramming systems :</h3>
<div class='choice'>
  <h4>
<input type='radio' value='0'  id='q4' name='q4' required > Are easier to develop than single programming systems. <br>
<input type='radio' value='0'  id='q4' name='q4'> Execute each job faster. <br>
<input type='radio' value='1'  id='q4' name='q4'> Execute more jobs in the same time period. <br>
<input type='radio' value='0'  id='q4' name='q4'> Are used only one large mainframe computers. <br>
</h4>
</div></p>
<hr>
<p><h3>5. Which is built directly on the hardware ?</h3>
<div class='choice'>
  <h4>
<input type='radio' value='1'  id='q5' name='q5' required > Operating System <br>
<input type='radio' value='0'  id='q5' name='q5'> Computer Environment<br>
<input type='radio' value='0'  id='q5' name='q5'> Application Software <br>
<input type='radio' value='0'  id='q5' name='q5'> Database System<br>
</h4>
</div></p>
<br>
        <div>

      <center><button type='submit' class='btn btn-outline-info' value='Submit'> Submit </button></center>


    </div>

</form>
</div>



<div class='navbar navbar-expand-lg' style='background-color: #262626;'>
    <div class='container'>
      
        <span class='mx-auto'><a href='https://vibhj.github.io/vibhanshuj9/index.html' target='_blank' style='color: white;'><i class='fa fa-copyright' aria-hidden='true'>vibhanshuj9</i></a></span>
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