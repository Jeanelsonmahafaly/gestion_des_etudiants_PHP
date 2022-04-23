<?php

session_start();
error_reporting(0);

//print_r($_SESSION);

$Cod_mat="";
$Num_Module="";
$Nom_mat="";
$Coef_mat="";




$Cod_mat=$_POST["Cod_mat"];
$Num_Module=$_POST["Num_Module"];
$Nom_mat=$_POST["Nom_mat"];
$Coef_mat=$_POST["Coef_mat"];



$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');
$matri="";
$code="";
$note1="";
$note2="";

$matri=$_POST['Matricule'];
$matrin=$_POST['Cod_mat'];
$note1=$_POST['Note_journalier'];
$note2=$_POST['Note_controle'];

	$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
    $sql2 = "INSERT INTO notes(Matricule,Cod_mat,Note_Journalier,Note_controle) VALUES ('$matri','$matrin','$note1','$note2')"; 
  
    
 
 $ree=$db->exec($sql2);  
 if ($ree==true){
    echo"<script>confirm('Enregistrement de Note d'Etudiant N°= ".$_POST['Matricule']." avec sucées ')</script>";
     
        ?>
        <script language="javascript">
        document.location.href = "afficherNote.php" ;
       </script>
        <?php
    }else{  
      
      echo"<script>alert('ereur de  enregistrement')</script>";
      ?>
        <script language="javascript">
           
              
          document.location.href = "afficherNote.php" ;
  
    
        </script>
        <?php
    }      
   



?>