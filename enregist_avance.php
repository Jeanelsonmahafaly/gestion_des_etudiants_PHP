<?php

session_start();
error_reporting(0);

//print_r($_SESSION);

$Matricule="";
$Cod_mat="";
$Note_journalier="";
$Note_controle="";




$Matricule=$_POST["Matricule"];
$Cod_mat=$_POST["Cod_mat"];
$Note_journalier=$_POST["Note_journalier"];
$Note_controle=$_POST["Note_controle"];



$hostname = 'localhost';
$username = 'root'; 
$password = '';  


//try {   

//include('cnx.php');

	$db = new PDO("mysql:host=$hostname;dbname=etude", $username, $password );     
  

  $sql2 = "INSERT INTO matiere(Matricule,Cod_mat,Not_journalier,Note_Controle) VALUES ('$Matricule','$Cod_mat','$Note_journalier','$Note_controle')"; 
 
 $db->exec($sql2);  

echo "\nPDOStatement::errorInfo():\n";
$arr = $db->errorInfo();
print_r($arr);




echo "<script>alert(\"Les données sont bien enregistrées!\")</script>"; 
include("aff_avance.php");





?>