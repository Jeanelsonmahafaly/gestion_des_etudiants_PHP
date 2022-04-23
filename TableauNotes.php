<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="modifierModule.css">	
<div class="row">
<span><a href="ajouter_mod.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" >Ajouter Module</a></span>
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">Résultats des Etudiants</div>
					<div class="panel-body">



 <?php 
  
      $Nom=array("Mamonjy ","Fano","Feno","Anjatiana", "Maminjaka","elson","mahafaly","fanorenana");
      $Note1=array("06","13","10","12", "09","10","05","14");
      $Note2=array("12" ,"10","14","04", "11","11","15","14");
      $Note3=array("19" ,"19","14","15", "09","10","06","04");
      $Note4=array("19" ,"19","14","15", "09","14","01","01"); 
      $coef=array("3","2","1");
        
   
    echo " <table border='1' >
        <tr>
            <th>Nom</th>
            <th>Note1</th>
            <th>Note1/Coef</th>
            <th>Note2</th>
            <th>Note2/Coef</th>
            <th>Note3</th>
            <th>Note3/coef</th>
            <th>Moyenne</th>
            <th>Resultat</th>

        </tr> ";
       
function resul($test){
     if ($test>10) {
         return "Admis";
     }else {
         return "Redouble";
     }
    
 }
for($i=0; $i<count($Nom);$i++){
    $res=(($Note1[$i]*$coef[0]+$Note2[$i]*$coef[1]+$Note3[$i]*$coef[2])/6);
     
 
echo " <tr>
                <td>".$Nom[$i]."</td>
                <td>".$Note1[$i]."</td>
                <td>".$Note1[$i]*$coef[0]."</td>
                <td>".$Note2[$i]."</td>
                <td>".$Note2[$i]*$coef[1]."</td>
                <td>".$Note3[$i]."</td>
                <td>".$Note3[$i]*$coef[2]."</td>
                <td>".$res."</td>
                <td>".resul($res)."</td>
         </tr> "; 
}
echo "</table>";

 ?> 
 

                   </div>
				</div>
			</div>
		</div>
        <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	</html>
