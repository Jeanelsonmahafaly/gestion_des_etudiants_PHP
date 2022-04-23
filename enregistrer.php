<?php

session_start();
error_reporting(0);

//print_r($_SESSION);

$Matricule="";
$Nom="";

$Date_naiss="";
$Adresse="";
$Niveau="";
$Mention="";



$Matricule=$_POST["Matricule"];
$Prenom=$_POST["Nom"];
$Nom=$_POST["Prenom"];

$Date_naiss=$_POST["Date_naiss"];
$Adresse=$_POST["Adresse"];
$Niveau=$_POST["Niveau"];
$Mention=$_POST["Mention"];




$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
	




  

  $sql2 = "INSERT INTO students(Matricule,Nom,Prenom,Date_naiss,Adresse,Niveau,Mention) VALUES ('$Matricule','$Nom','$Prenom','$Date_naiss','$Adresse','$Niveau','$Mention')"; 
 
 $r2=$db->exec($sql2);  
 if ($r2==true){
  echo"<script>confirm('enregistrement de étudiants N°=".$_POST['Matricule']."'  avec sucées ')</script>";
   
      ?>
      <script language="javascript">
         
            
        document.location.href = "aff_note.php" ;

  
      </script>
      <?php
  }else{
   
    echo"<script>confirm('ereur de enregistrement')</script>";
    ?>
    <script language="javascript">
       
          
      document.location.href = "aff_note.php" ;


    </script>
    <?php
  } 
 
?>





