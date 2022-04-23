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
  <!--
<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main"> 
	

    <div class="signup-form-container  " style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);" >
-->	
<?php


if(isset($_POST['btn']))
{
   // `Matricule``Cod_Mat``Note_journalier``Note_controle`
  if(empty($_POST['matricule']) and empty($_POST['Cod_Mat'])and empty($_POST['Note_journalier'])and empty($_POST['Note_controle']))
 {
  
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel">
          <use xlink:href="#stroked-cancel"></use></svg> Un champ est vide !<a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


 // $sql2 = 'INSERT INTO notes VALUES (2,"001",10,19)'; 
 $matriculee="";
 $codMate="";
 $note1e="";
 $note2e="";

 $hostname = 'localhost';
$username = 'root'; 
$password = '';  

 $db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     

 //$matriculee=ceil($_POST['Matricule']);
 //$codMate=ceil($_POST['Cod_mat']);
 $matriculee=$_POST['Matricule'];
 $codMate=$_POST['Cod_mat'];

 $note1e=$_POST['Note_journalier'];
 $note2e=$_POST['Note_controle'];
 
 

  $sql2 = "INSERT INTO notes(Matricule,Cod_mat,Note_Journalier,Note_controle) VALUES ('$matriculee','$codMate','$note1e','$note2e')"; 

   
 
 $db->exec($sql2);        
 


       

echo "\nPDOStatement::errorInfo():\n";
$arr = $db->errorInfo();
print_r($arr);



echo "<script>alert(\"Les données sont bien enregistrées!\")</script>"; 
include("afficherNote.php");

 } 
}






?>

<script>

 
 document.location('afficherNote.php');
 


</script>






    
         <!-- form start  action="enregistrenotess.php"-->
         <div class="header">
 	 <h2>Ajouter Note</h2>
</div> 
  
         <form  action="enregistrenotess.php" method="post">
         
        
                  
         <div class="form-body">
         
         	  <div class="alert alert-info" id="message" style="display:none;">
              Non Enregistrer
              </div>

              <div class="row ">

              <div  class="input-group">
                  <label ><center>Matricule</center></label>
                  
                  <select  name="Matricule"  class="form-control">
                            
                                <?php
                                  //$conn = new PDO('mysql:host=localhost;dbname=etude','root','');
 
                                   // $recherche = $conn->query('SELECT matricule FROM etudiant WHERE mention="DAII" AND niveau = "'.$_POST['niveau'].'" ');
                                    $recherche = $db->prepare('SELECT Matricule FROM students ');
                                    $recherche->execute(array($_POST['Matricule']));
                                    while($res = $recherche->fetch()){
                                      ?>
                                        <option value="<?php echo ($res['Matricule']); ?>">
                                              <?php echo ($res['Matricule']); ?>
                                        </option>
                                        <?php }
                                    
                                ?>
                    </select>
                  
              </div>
              
              <div  class="input-group">
                  <label ><center>Cod Matiere</center></label>
                  
                  <select  name="Cod_mat"  class="form-control">
                            
                                <?php
                                  //$conn = new PDO('mysql:host=localhost;dbname=etude','root','');
 
                                   // $recherche = $conn->query('SELECT matricule FROM etudiant WHERE mention="DAII" AND niveau = "'.$_POST['niveau'].'" ');
                                    $recherche = $db->prepare('SELECT Cod_mat FROM matiere ');
                                    $recherche->execute(array($_POST['Cod_mat']));
                                    while($res = $recherche->fetch()){
                                      ?>
                                        <option value="<?php echo ($res['Cod_mat']); ?>">
                                              <?php echo ($res['Cod_mat']); ?>
                                        </option>
                                        <?php }
                                    
                                ?>
                    </select>
                  
              </div>

                      
            
               
              <div  class="input-group" >
                   <label ><center>Note Journalier </center></label>
                   <input name="Note_journalier"   type="number" min="0" max="20" placeholder="Choisir note journalier" required>
                  
              </div>  
              <div  class="input-group" >
                   <label ><center>Note Controle </center></label>
                   <input name="Note_controle"   type="number" min="0" max="20" placeholder="Choisir le notes de controle" required>
                  
              </div>             
             
              </div>
<br> <br> <br>
              
            
            <div class="input-group">
                 <button type="submit"  name="btn" class="btn">
 Enregistrer
                 </button>
            </div>


            </form>
            
           </div>
 </div>
    
   <script>
  
   </script> 

  <?php include('script_acc.php'); ?>   

	
</body>
</html>

	