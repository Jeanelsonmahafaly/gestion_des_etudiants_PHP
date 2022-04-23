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
	
	


<!--
<link href="LoginCss/style.css" rel="stylesheet">




<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />


        <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="./css/prettify-1.0.css" rel="stylesheet">
        <link href="./css/base.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="logine.css">
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
 	       <h2>Ajouter un étudiant</h2>
      </div> 
         <form  enctype="multipart/form-data"  action="enregistrerr.php" method="post">
       
  <div class="input-group">
      <label >Nom</label>
  <input name="Nom"   rows="2" placeholder="Nom" required></input>
  </div>
  <div class="input-group">
      <label >Prénom</label>
  <input name="Prenom"   rows="2" placeholder="Prenom" required></input>
  </div>

                      
         	 
                        
              <div class="input-group">
              <label >Date de Naissance </label>
                       <input name="Date_naiss"  type="date"  rows="2" placeholder="aaaa-mm-jj" required></input>
                                       
              </div>
                      
              <div class="input-group">
                   <label >Adresse</label>
                  <input name="Adresse"   rows="2" placeholder="Adresse" required></input>
                                       
              </div>

              <div class="input-group">
                   <label >Niveau</label>
                    <input name="Niveau"  rows="2" placeholder="Niveau"></input>
               </div>

              <div class="input-group">
                  
              <label>Mention</label> 
              <input name="Mention"   rows="2" placeholder="Mention" required></input>
           </div>



                  
                        
            
            
            <div  class="input-group">
                 <button class="input-group" type="submit">
                  Enregistrer
                 </button>
            </div>


            </form>
            
           

	</div>
    
    

  <?php include('script_acc.php'); ?>   

	
</body>
</html>

	