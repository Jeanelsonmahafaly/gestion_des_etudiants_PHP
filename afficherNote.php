<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');
}


 
?>
<!DOCTYPE html>
<?php

 include('cnx.php');

?>
<html>
<head>
	<?php include('inccss.php'); ?>
 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>
<?php include('menu.php'); ?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">	
<?php include('tab_Notes.php'); ?>
					
</div>

	<?php include('incjs.php'); ?>
</body>
</html>

	