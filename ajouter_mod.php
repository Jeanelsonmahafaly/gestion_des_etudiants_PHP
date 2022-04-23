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
<link rel="stylesheet" href="logine.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]
        <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
            <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

-->            <!--Icons-->
<?php include('inccss.php'); ?>
</head>



<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

				
	<?php include('menu.php'); ?>	
  
<?php


if(isset($_POST['btn']))
{

  if(empty($_POST['module']) and empty($_POST['heure']))
 {
  
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel">
          <use xlink:href="#stroked-cancel"></use></svg> Un champ est vide !<a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
  $sql2 = 'INSERT INTO module VALUES ("'.$_POST['Num_Module'].'","'.$_POST['module'].'","'.$_POST['heure'].'")'; 
 
 $ree=$db->exec($sql2);   
 if ($ree==true){
  echo"<script>confirm('Enregistrement de N°= ".$_POST['Num_Module']." avec sucées ')</script>";
   
      ?>
      <script language="javascript">
         
            
        document.location.href = "aff_module.php" ;

  
      </script>
      <?php
  }else{
    echo mysqli_error($db); 
    echo"<script>alert('ereur de modification')</script>";
  }      
 


 

 } 
}






?>








    
         <!-- form start -->
         <div class="header">
 	 <h2>Ajouter Module</h2>
</div> 
  
         <form   action="enregistrermod.php"  method="post">
         
        
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              Non Enregistrer
              </div>

              <div class="row ">
              <div  class="input-group">
                   <label ><center>N°Module</center></label>
                 <input name="Num_Module"   type="number"  min="1" max="30" placeholder="N°Module" required>
                  
                  
              </div>
              <div  class="input-group">
                   <label ><center>Module</center></label>
                 <input name="module"   type="text" placeholder="Module" required>
                  
                  
              </div>

                      
            <div  class="input-group" >
                   <label ><center>Nombre de Heures</center></label>
                   <input name="heure"   type="number" min="1" max="30" placeholder="Nombre Heures" required>
                  
              </div>               
             
              </div>
<br> <br> <br>
              
            
            <div class="input-group">
                 <button type="submit"  name="btn" class="btn" >
 Enregistrer
                 </button>
            </div>


            </form>
            
           </div>
 </div>
    
    

  <?php include('script_acc.php'); ?>   

	
</body>
</html>

	