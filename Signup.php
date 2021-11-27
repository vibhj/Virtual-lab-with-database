<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Sign Up</title>

		
	<!-- CSS only -->
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
		 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	</script>
<style type="text/css">
	body{
		color: #fff;
		
		font-family: lato;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 100px 0;
	}
	.signup-form h2{
		color: #636363;
    margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
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
    	<li class="nav-item "><a class="nav-link" href="Login.php" onclick="login()"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
    	<li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
		<li class="nav-item"><a class="nav-link" href="Login.php" onclick="login()">Quiz</a></li>
		<li class="nav-item"><a class="nav-link"href="https://www.google.com/" target="_blank"><i class="fa fa-search" aria-hidden="true"></i>Search</a></li>
      </ul>

    	<ul class="navbar-nav ml-auto">
		<li class="nav-item active"><a class="nav-link" href="Signup.php">Sign Up <i class="fa fa-user-plus"></i></a></li>
		<li class="nav-item"><a class="nav-link" href="Login.php">Login <i class="fa fa-user"></i></a></li>
	</ul>

  </div>
</nav>
	
<br>
<br>
		
<div style="background: #63738a;">
<div class="signup-form">

    <form action="Register.php" method="POST">
		<h2>Register</h2>
		<p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
				<div class="col-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required></div>
				<div class="col-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        
		<div class="form-group">
			<input type="submit" class="btn btn-success btn-lg btn-block" value="Register Now">
           
    </div>
    </form>
	<div class="text-center">Already have an account? <a href="Login.php">Log in</a></div>
</div>

</div>


<div class="navbar navbar-expand-lg" style="background-color: #262626;">
  		
			  <span class="mx-auto"><a href="https://vibhj.github.io/vibhanshuj9/index.html" target="_blank" style="color: white;"><i class="fa fa-copyright" aria-hidden="true">vibhanshuj9</i></a></span>
  	
</div>






<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>                            
