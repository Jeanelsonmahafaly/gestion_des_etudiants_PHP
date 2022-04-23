<?php
	include('cnx.php');
	
	
	//$db=new PDO('mysql:host=127.0.0.1;dbname=etude','root','',
  
        
        $q1 = "DELETE FROM Module WHERE Num_Module = '".$_GET['id']."'";
	 
	   if ($resultat=$db->query($q1)){
	         echo"<script>confirm('supression  module, numero ".$_GET['id']." avec sucées ')</script>";
			
			 ?>
				<script language="javascript">
			        
					document.location.href = "aff_module.php" ;
	
		
				</script>
			 <?php
		}else{
			echo mysqli_error($db); 
			echo"<script>alert('ereur de modufication')</script>";
		}
			   
	  
		
?>


   

