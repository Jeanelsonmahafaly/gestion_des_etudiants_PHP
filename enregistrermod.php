<?php


session_start();
error_reporting(0);
$hostname = 'localhost';
$username = 'root'; 
$password = '';  

$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
  


$sql2 = 'INSERT INTO module VALUES ("'.$_POST['Num_Module'].'","'.$_POST['module'].'","'.$_POST['heure'].'")'; 
$r2=$db->exec($sql2);  


       


if ($r2==true){
    echo"<script>confirm('enregistrement de module avec sucsses avec sucées ')</script>";
     
        ?>
        <script language="javascript">
           
              
          document.location.href = "aff_module.php" ;

    
        </script>
        <?php
    }else{
     
      echo"<script>alert('ereur de enregistrement')</script>";
      ?>
      <script language="javascript">
         
            
        document.location.href = "aff_module.php" ;

  
      </script>
      <?php
    }  


	


 ?>