<?php include'auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title><?php echo $_SESSION['username'] . '\'s profile'; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #1abc8c; /* Dark Blue */
      color: #ffffff;
  }
 
  </style>
  <?php include'layout/header.php'; ?>


</head>
<body>




<div id = "contact" class="container-fluid">
  <div class="jumbotron">  
    <div class ="row">
      <div class="container-fluid bg-1 text-center">
  
  <img src="images/loken.jpg" class="img-circle" width="200" height="250">
  <h3>I'm a student and I am a learner.</h3>
</div>

<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <p>Fourth-year Computer Science and Information Technology student, currently looking for an internship to expand my collegiate experience and help grow my knowledge of the field. Interests include Web Development, Software Development, Back-end Development and Computer Science Research.</p>
</div>

      
    </div>
      
  </div>
  
</div>



<?php include'layout/footer.php' ?>

</body>
</html>