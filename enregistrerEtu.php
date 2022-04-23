<?php


session_start();
error_reporting(0);
$hostname = 'localhost';
$username = 'root'; 
$password = '';  

$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
  



$Matricule=$_POST['Matricule'];
$Nom=$_POST['Nom'];
$Prenom=$_POST['Prenom'];
$Date_naiss=$_POST['Date_naiss'];
$Adresse=$_POST['Adresse'];
$Niveau=$_POST['Niveau'];
$Mention=$_POST['Mention'];

 // $sql2 = 'INSERT INTO notes VALUES (2,"001",10,19)'; 
     
 $sql2 = "INSERT INTO students(Matricule,Nom,Prenom,Date_naiss,Adresse,Niveau,Mention) VALUES ('$Matricule','$Nom','$Prenom','$Date_naiss','$Adresse','$Niveau','$Mention')"; 
 
 $r2=$db->exec($sql2);        
 

 if ($r2==true){
  echo"<script>confirm('enregistrement de etudiant  avec succées ')</script>";
   
      ?>
      <script language="javascript">
         
            
        document.location.href = "aff_note.php" ;

  
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