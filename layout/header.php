<?php 

 ?>

<!DOCTYPE html>
<html >
<head>
<title>Visit Nepal</title>


	<meta charset="UTF-8">
	 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/main.css">
	
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="index.php">Visit Nepal</a>
    </div>



   <!--  <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Visit Nepal</a>
    </div> -->
     <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
         <li class="active"><a href="index.php">Home</a></li>
	  
	        <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Places
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#pokhara">Pokhara</a></li>
  		        <li><a href="#mustang">Mustang</a></li>
  			      <li><a href="#chandragiri">Chandragiri</a></li>
            </ul>
         </li>
	    <li><a href="#contact">Contact Me</a></li>
     </ul>
     
     <ul class="nav navbar-nav navbar-right">
      
      <?php if(isset($_SESSION['username'])) {?>
     <li><a href="profile.php?p=profile">Profile</a></li>
      <li><a href="login.php?p=logout">Logout</a></li>
    <?php } else { ?>
      <li><a href="login.php?p=login">Login</a></li>
    <?php } ?>

    </ul>
  </div>
  </div>
</nav>
</head>
<body>



</div>

</head>