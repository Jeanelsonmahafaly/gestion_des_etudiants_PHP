<?php

session_start();
error_reporting(0);
//print_r($_SESSION);

$date="";
$nom="";
$prenom="";
$email="";
$password2="";

$date=$_POST["date"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];







$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
	




   
 

  $sql2 = "INSERT INTO admin VALUES ('','$nom','$prenom','$date', '$email','$password2')"; 
 
 $db->exec($sql2);  

 if ($r2==true){
  echo"<script>confirm('insertion de utulisateur  avec sucées ')</script>";
   
      ?>
      <script language="javascript">
         
            
        document.location.href = "index.php" ;

  
      </script>
      <?php
  }else{
   
    echo"<script>alert('ereur de Enregistrement')</script>";
    ?>
      <script language="javascript">
         
            
        document.location.href = "index.php" ;

  
      </script>
      <?php
  } 



?>
