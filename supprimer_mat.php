<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM Matiere WHERE Cod_Mat = '".$_GET['Cod_mat']."'";
	if ($resultat=$db->query($q1)){
		echo"<script>alert('supresion de module  Code Matatiere= ".$_GET['Cod_mat']." avec sucées ')</script>";
	   
		?>
		   <script language="javascript">
			   
			   document.location.href = "aff_matiere.php" ;

   
		   </script>
		<?php
   }else{
	   echo mysqli_error($db); 
	   echo"<script>alert('ereur de supression ')</script>";
   }
    


	


?>

