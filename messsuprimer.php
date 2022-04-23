<?php
	include('cnx.php');
	

	
	
		

        $q1 = "DELETE FROM Module WHERE Num_Module = '".$_GET['id']."'";
	    $r1 = $db->query($q1);
	       
	
        if ($r2==true){
			echo"<script>confirm('supression de module N°= ".$_GET['Cod_mat']." avec sucées ')</script>";
			 
				?>
				<script language="javascript">
				   
					  
				  document.location.href = "aff_matiere.php" ;
	
			
				</script>
				<?php
			}else{
			 
			  echo"<script>alert('ereur de modification')</script>";
			} 
   ?>
   

 	
 


