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
	

	<style type='text/css'>
		body{
			overflow-x: hidden;

		}
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
    	<li class='nav-item active'><a class='nav-link' href='#'><i class='fa fa-home' aria-hidden='true'></i>Home</a></li>
    	<li class='nav-item'><a class='nav-link' href='aboutus.php'>About Us</a></li>
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
    <div class='col'>
      <h1><strong>Operating System Tutorial: </strong></h1>
    </div>
  </div>
    <div class='row'>
    	<div class='col'></div>
    	<div class='col-8'>
			<h3><b>What is an Operating System?</b></h3>
		
              	<h5>An <b>Operating system (OS)</b> is a software which acts as an interface between the end user and computer hardware. Every computer must have at least one OS to run other programs. An application like Chrome, MS Word, Games, etc needs some environment in which it will run and perform its task. The OS helps you to communicate with the computer without knowing how to speak the computer's language. It is not possible for the user to use any computer or mobile device without having an operating system.</h5><br>
              	<img src='https://www.guru99.com/images/1/011819_0753_OperatingSy1.png'>
        </div>
    </div>
    <br>
    <div class='row'>
    	<div class='col-sm'>
      				<h3>In this tutorial, you will learn:</h3><br>
    	</div>
	</div>
</div>

<div class='row mb-5' style='margin-left: 5%;'>
	<div id='list-example' class='list-group col-4 mx-auto' >
	  <a class='list-group-item list-group-item-action active' href='#list-item-1'>Examples of Operating System with Market Share
</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-2'>History Of OS</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-3'>Features of Operating System</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-4'>What is a Kernel?
</a>
 	  <a class='list-group-item list-group-item-action' href='#list-item-5'>Functions of an Operating System
</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-6'>Types of Operating System</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-7'>Difference between Firmware and Operating System</a>
	  <a class='list-group-item list-group-item-action' href='#list-item-8'>Difference between 32-Bit vs. 64 Bit Operating System
</a>
 	  <a class='list-group-item list-group-item-action' href='#list-item-9'>The advantage of using Operating System

</a>
      <a class='list-group-item list-group-item-action' href='#list-item-10'>The disadvantage of using Operating System

</a>
 	  <a class='list-group-item list-group-item-action' href='#list-item-11'>Summary

</a>



	</div>
	<div data-spy='scroll' style='height: 800px; overflow-y: scroll;' data-target='#list-example' data-offset='0' class='scrollspy-example col border p-3 rounded'>
	  <h3 id='list-item-1'>Examples of Operating System with Market Share
:</h3><br>
	  <p>
			<img src='https://www.guru99.com/images/1/011819_0753_OperatingSy2.png' style='height :80%; width:55%; margin-left: 20%'><br>
	  </p>
	  <p>
			<h5 style='margin-left: 10%;' >Here is a list of Operating Systems with the latest MarketShare</h5><br>
			<img src='Market Share.png' style='width:70%; height: 30%; margin-left: 20%'>
	    </p>
	  <h3 id='list-item-2' class='pt-5'>
History Of OS:</h3>
	  <p>  
	  	<h6>
	  	 <ul style='margin-left: 15%;'>
		    	<li>Operating systems were first developed in the late 1950s to<br> manage tape storage.</li><br>
		    	<li>The General Motors Research Lab implemented the first OS<br> in the early 1950s for their IBM 701.</li><br>
		    	<li>In the mid-1960s, operating systems started to use disks.</li><br>
		    	<li>In the late 1960s, the first version of the Unix OS <br>was developed.</li><br>
		    	<li>The first OS built by Microsoft was DOS. It was built<br> in 1981 by purchasing the 86-DOS software from a Seattle company.</li><br>
		    	<li>The present-day popular OS Windows first came to existence<br> in 1985 when a GUI was created and paired with MS-DOS.</li><br>
		    </ul>
		</h6>    
	  
		</p>
	  <h3 id='list-item-3' class='pt-5'>Features of Operating System:</h3>
	  <p>
	  	<h5 style='margin-left: 15%;'>Here is a list commonly found important features of an Operating System</h5>
		<p>
			<h6 style='margin-left: 18%;'>
		    <ul>
		    	<li>Protected and supervisor mode</li><br>
		    	<li>Allows disk access and file systems Device drivers Networking Security</li><br>
		    	<li>Program Execution</li><br>
		    	<li>Memory management Virtual Memory Multitasking</li><br>
		    	<li>Handling I/O operations</li><br>
		    	<li>Manipulation of the file system</li><br>
		    	<li>Error Detection and handling</li><br>
		    	<li>Resource allocation</li><br>
		    	<li>Information and Resource Protection</li><br>
		    </ul>
		    </h6>
		    <img src='https://www.guru99.com/images/1/011819_0753_OperatingSy3.png' style='margin-left: 25%;'>
		</p>
	  </p>
	  <h3 id='list-item-4' class='pt-5' >What is a Kernel?</h3>
	  <p><h5 style='margin-left: 15%;'>
	  	The kernel is the central component of a computer operating systems.
		The only job performed by the kernel is to the manage the communication
		between the software and the hardware.A Kernel is at the nucleus of a
		computer. It makes the communication between the hardware and software
		possible.While the Kernel is the innermost part of an operating system,
		a shell is the outermost one.
	  </h5></p>
	  <p><img src='https://www.guru99.com/images/1/011819_0753_OperatingSy4.png' style='margin-left: 15%;'></p>
	  <p><h5 style='margin-left: 15%;'>
	  	Features of Kernel :
	  </h5></p>
	  <p>
	  	<h6>
	  		<ul style='margin-left: 20%;'>
				<li>Low-level scheduling of processes</li><br>
				<li>Inter-process communication</li><br>
				<li>Process synchronization</li><br>
				<li>Context switching</li><br>
			</ul>
	  	</h6>
	  </p>
	  <p><h5 style='margin-left: 15%;'>
	      Types of Kernel :
	  </h5></p>
	  <p>
		<h6 style='margin-left: 20%;'>
			<ol>
				<li>Monolithic</li>
				<p>
					A monolithic kernel is a single code or block of the program. It provides all the required services offered by the operating system. It is a simplistic design which creates a distinct communication layer between the hardware and software.
				</p>
				
				<li>Microkernels</li>
				<p>
					Microkernel manages all system resources. In this type of kernel, services are implemented in different address space. The user services are stored in user address space, and kernel services are stored under kernel address space. So, it helps to reduce the size of both the kernel<br> and operating system
				</p>
			</ol>
		</h6>
	    </p>
	    <h3 id='list-item-5' class='pt-5'>Functions of an Operating System:</h3><br>
	    <img src='https://www.guru99.com/images/1/121119_0437_Componentso1.png' style='margin-left: 15%;'><br>
	  <p><h4 style='margin-left:5%;'>In an operating system software performs each of the function:</h4> </p>
	  <p>
	  	<h5>
    		<ol>
    			<li><b>Process management:-</b> Process management helps OS to create and delete processes.
    			It also provides mechanisms for synchronization and communication among processes.</li><br>

    			<li><b>Memory management:-</b> Memory management module performs the task of allocation and de-allocation of memory space to programs in need of this resources.</li><br>

    			<li><b>File management:-</b> It manages all the file-related activities such as organization storage, retrieval, naming, sharing, and protection of files.</li><br>

    			<li><b>Device Management:-</b> Device management keeps tracks of all devices. This module also responsible for this task is known as the I/O controller. It also performs the task of allocation <br>
    			and de-allocation of the devices.</li><br>

    			<li><b>I/O System Management:-</b> One of the main objects of any OS is to hide the peculiarities of that hardware devices from the user.</li><br>

    			<li><b>Secondary-Storage Management:-</b> Systems have several levels of storage which includes primary storage, secondary storage, and cache storage. Instructions and data must be stored in primary storage or cache so that a running program can reference it.</li><br>

    			<li><b>Security:-</b> Security module protects the data and information of a computer system 
    			against malware threat and authorized access.</li><br>

    			<li><b>Command interpretation:</b> This module is interpreting commands given by the and acting system resources to process that commands.</li><br>

    			<li><b>Networking:-</b> A distributed system is a group of processors which do not share memory,hardware devices, or a clock. The processors communicate with one another through the network.</li><br>

    			<li><b>Job accounting:-</b> Keeping track of time & resource used by various job and users.</li><br>

    			<li><b>Communication management:-</b> Coordination and assignment of compilers, interpreters, and another software resource of the various users of the computer systems.</li><br>
    		</ol>
    		</h5>
	  </p>
	     <h3 id='list-item-6' class='pt-5'>Types of Operating System:</h3><br>
	     <p>
         <h5 style='margin-left: 15%'>
         	<ul>
         		<li>Batch Operating System</li><br>
         		<li>Multitasking/Time Sharing OS</li><br>
         		<li>Multiprocessing OS</li><br>
         		<li>Real Time OS</li><br>
         		<li>Distributed OS</li><br>
         		<li>Network OS</li><br>
         		<li>Mobile OS</li><br>
         	</ul>
         	
         </h5 style='margin-left: 10%;'>	
			<p>
    		<h4><b>Batch Operating System</b></h4><br>
    		<p>
    		    <h5>Some computer processes are very lengthy and time-consuming. To speed the same process, a job with a similar type of needs are batched together and run as a group.<br>
    		    </h5>
    	    </p>
    	    <p>
    	    	<h5>The user of a batch operating system never directly interacts with the computer. In this type of OS, every user prepares his or her job on an offline device like a punch card and submit it to the computer operator.<br>
    	    	</h5>
    	    </p>
                       <br>

    	 <p>
    		<h4><b>Multi-Tasking/Time-sharing Operating systems</b></h4><br>
    		<p>
    		    <h5>Time-sharing operating system enables people located at a different terminal(shell) to use a single computer system at the same time. The processor time (CPU) which is shared among multiple users is termed as time sharing.
    		    </h5>
    	    </p>
    	</p>

    	        <br>

    	 <p>
    		<h4><b>Real time OS</b></h4><br>
    		<p>
    		    <h5>A real time operating system time interval to process and respond to inputs is very small. Examples: Military, Software Systems, Space Software Systems.<br>
    		    </h5>
    	    </p>
    	</p>

    	<br>

    	 <p>
    		<h4><b>Distributed Operating System</b></h4><br>
    		<p>
    		    <h5>Distributed systems use many processors located in different machines to provide very fast computation to its users.<br>
    		    </h5>
    	    </p>
    	</p>

    	<br>

    	 <p>
    		<h4><b>Network Operating System</b></h4><br>
    		<p>
    		    <h5>Network Operating System runs on a server. It provides the capability to serve to manage data, user, groups, security, application, and other networking functions.<br>
    		    </h5>
    	    </p>
    	</p>

            <br>
         <p>
    		<h4><b>Mobile OS</b></h4><br>
    		<p>
    		    <h5>Mobile operating systems are those OS which is especially that are designed to power smartphones, tablets, and wearables devices.<br>
    		    </h5>
    	    </p>
    	    <p>
    	    	<h5>Some most famous mobile operating systems are Android and iOS, but others include BlackBerry, Web, and watchOS.<br>
    	    	</h5>
    	    </p>
    	   </p>
    	</p>
    </p>

	  <h3 id='list-item-7' class='pt-5'>Difference between Firmware and Operating System:</h3><br>
	  <p> <img src='Firmware.png' style='margin-left:5%;width:95%; height: auto;'>    </p>
	  <br>
	  <h3 id='list-item-8' class='pt-5'>Difference between 32-Bit vs. 64 Bit Operating System:</h3><br>
	  <p>  <img src='32vs64.png'  style='margin-left:5%;width:95%; height: auto;'>   </p>
	  <br>
	  <h3 id='list-item-9' class='pt-5'>The Advantage of using Operating System:</h3><br>
	  <p>
	  <h5 style='margin-left: 10%;'>
          	<ul>
          		<li>Allows you to hide details of hardware by creating an abstraction.</li><br>
          		<li>Easy to use with a GUI.</li><br>
          		<li>Offers an environment in which a user may execute programs/applications.</li><br>
          		<li>The operating system must make sure that the computer system convenient to use.</li><br>
          		<li>Operating System acts as an intermediary among applications and the hardware components.</li><br>
          		<li>It provides the computer system resources with easy to use format.</li><br>
          		<li>Acts as an intermediator between all hardware's and software's of the system.</li><br>
          	</ul>
          </h5> 
	  </p>
	  <h3 id='list-item-10' class='pt-5'>The Disadvantage of using Operating System
:</h3><br>
	  <p> <h5 style='margin-left: 10%;'>
          	<ul>
          		<li>If any issue occurs in OS, you may lose all the contents which have been stored<br> in your system.</li><br>
          		<li>Operating system's software is quite expensive for small size organization which<br> adds burden on them. Example Windows.</li><br>
          		<li>It is never entirely secure as a threat can occur at any time.</li><br>
          		
          	</ul>
          </h5></p>
          <h3 id='list-item-11' class='pt-5'>Summary:</h3><br>
          <p>
          	<h5 style='margin-left:10%; '>
          		<ul>
          		<li>An operating system is a software which acts as an interface between the end user and computer hardware.</li><br>
          		<li>Operating systems were first developed in the late 1950s to manage tape storage.</li><br>
          		<li>The kernel is the central component of a computer operating systems. The only job performed by the kernel is to the manage the communication between the software and the hardware.</li><br>
          		<li>Two most popular kernels are Monolithic and MicroKernels.</li><br>
          		<li>Process, Device, File, I/O, Secondary-Storage, Memory management are various functions of an Operating System.</li><br>
          		<li>Batch, Multitasking/Time Sharing, Multiprocessing, Real Time, Distributed, Network, Mobile are various types of Operating Systems.</li><br>
          
          	</ul>
          	</h5>
          </p>
	</div>
</div>
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
