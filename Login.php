<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
    
    <!-- CSS only -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<style type="text/css">

    body{
        font-family: lato;
    }
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    .nav-item{
            font-size: 20px;
            padding-left: 10px;
        }
</style>
<script type="text/javascript">
        function login(){
            alert("Before accessing this, you must have to login first !!!");
        }
    </script>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #262626;">
  <a class="navbar-brand" href="index.php" class="navbar-brand"> <i class="fa fa-book" aria-hidden="true"></i>VirtualLab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="Login.php" onclick="login()"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
        <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="Login.php" onclick="login()">Quiz</a></li>
        <li class="nav-item"><a class="nav-link"href="https://www.google.com/" target="_blank"><i class="fa fa-search" aria-hidden="true"></i>Search</a></li>
      </ul>

        <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="Signup.php">Sign Up <i class="fa fa-user-plus"></i></a></li>
        <li class="nav-item active"><a class="nav-link" href="Login.php">Login <i class="fa fa-user"></i></a></li>
    </ul>

  </div>
</nav>
    
<br>
<br>

<div class="container" style="padding-top: 10%; padding-bottom: 10%;">
    <div class="row">
        <div class="col-lg-6">
            
            <img width="400" height="400" src="login.jpg"  >
            
        </div>
        <div class="col-lg-6">
                
<div class="login-form">

    <form method="POST" action="Connect.php">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required name="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required name="password">
        </div>
        <div class="form-group">

            <input type="submit" class="btn btn-success btn-block " value="Log in">

        </div>
              
    </form>
    <p class="text-center"><a href="Signup.php">Create an Account</a></p>
</div>

        </div>
    </div>
</div>



<div class="navbar navbar-expand-lg" style="background-color: #262626;">
        <div class="container">
        
              <span class="mx-auto"><a href="https://vibhj.github.io/vibhanshuj9/index.html" target="_blank" style="color: white;"><i class="fa fa-copyright" aria-hidden="true">vibhanshuj9</i></a></span>
    </div>
</div>










<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>                                                               
