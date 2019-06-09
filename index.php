<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giao diện người máy</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
 <?php
 session_start();
 ?>
<body background="images/anh1.jpg">
<nav>
	 <!-- /.giao dien thanh menu  --> 
  <div class="container"> 
   <?php
   include('module/menu.php');

   ?>
  </div>
  <!-- /.giao dien silder  --> 
</nav>
<div class="container">
    <?php
    include('module/baner.php');
    ?>
</div>
    <hr>  
  </div>

<div class="container">
  
</div>
<div class="container">
  <div class="row text-center">
   <?php
   include('module/content.php');
   ?>
  </div>
  
  <nav class="text-center">
  </nav>
</div>
<?php
include('module/footer.php');
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>

</body>
</html>