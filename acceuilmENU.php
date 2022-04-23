
<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');
}

$i=1;
 
?>
<!DOCTYPE html>
<?php
  //session_start();
  include('cnx.php');
?>


<html>
<head>

        <link rel="stylesheet" href="MENU.css">
        <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
            <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
<!--Icons-->
<?php include('inccss.php'); ?>
</head>



<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

				
	<?php include('menu.php'); ?>	

<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 	

        <!-- form start -->
     <div class="header">
 	       <h2>BIENVENUE SUR L'APPLICATION GESTION DES ETUDIANTS</h2>
      </div> 
	</div>
    
    

  <?php include('script_acc.php'); ?>   

	
</body>
</html>

	