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
	
<link rel="stylesheet" href="login.css">



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
     <!--	
<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
	

    <div class="signup-form-container  " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);" >
    
          form start -->
          <?php


if(isset($_POST['btn']))
{

  if(empty($_POST['Matricule'])and empty($_POST['Cod_mat']) and empty($_POST['Note_journalier'])and empty($_POST['Note_controle']))
 {
  
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Un champ est vide !<a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {

     
      
  $sql2 = 'INSERT INTO notes VALUES ("'.$_POST['Matricule'].'","'.$_POST['Cod_mat'].'","'.$_POST['Note_journalier'].'","'.$_POST['Note_controle'].'")'; 
 
 $db->exec($sql2);        
 
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre note est bien enregistrer! <a href="#" class="pull-right"></a>
        </div>'; 
 } 
}






?>



<div class="header">
 	 <h2>Ajouter matiere</h2>
</div>
         <form   action="enregist_avance.php" method="post">
         
     
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              Non Enregistrer
              </div>

             
        

               
  <br> <br> <br>
            
              <div class="input-group" >
                  <label > <center>Matricule</center></label>
                   <input name="Matricule" rows="2" placeholder="Matricule" required></input>
                  </div>
                  <div class="input-group" >
                  <label > <center>N°Module</center></label>
                  <input name="Cod_mat" rows="2" placeholder="Matricule" required></input>
                 
                          
                  </div>
                      
         	 
                        
              <div  class="input-group" >
              <label > <center>Note journaliere</center></label>
                    <input name="Note_journalier"   rows="2" placeholder="Note journaliere" required></input>
                                     
              </div>
                      
              <div  class="input-group">
              <label > <center>Note Controle</center></label>
                     <input name="Note_controle" rows="2" placeholder="Note Controle" required></input>
                    </div>

            


                  
                        
            </div>
            
            <div class="input-group">
                 <button type="submit" name="btn" class="btn">
                 Enregistrer
                 </button>
            </div>


            </form>
            
           </div>

	</div>
    
    

  <?php include('script_acc.php'); ?>   

	
</body>
</html>

	