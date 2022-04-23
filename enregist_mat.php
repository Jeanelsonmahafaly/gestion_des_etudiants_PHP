<?php

session_start();
error_reporting(0);

//print_r($_SESSION);

$Cod_mat="";
$Num_Module="";
$Nom_mat="";
$Coef_mat="";




$Cod_mat=$_POST["Cod_mat"];
$Num_Module=ceil($_POST["Num_Module"]);
$Nom_mat=$_POST["Nom_mat"];
$Coef_mat=$_POST["Coef_mat"];



$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
  

  $sql2 = "INSERT INTO matiere(Cod_mat,Num_Module,Nom_mat,Coef_mat) VALUES ('$Cod_mat','$Num_Module','$Nom_mat','$Coef_mat')"; 
 
 $r2=$db->exec($sql2);  

 
if ($r2==true){
  echo"<script>confirm('enregistrement matiere  avec sucées ')</script>";
   
      ?>
      <script language="javascript">
         
            
        document.location.href = "aff_matiere.php" ;

  
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