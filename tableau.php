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
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.25), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">etudiants Enregistrées</div>
					
					<div class="panel-body">
					<span><a href="acceuil2.php"  class="btn btn-secondary modsup" >Ajouter</a></span>
						<table data-toggle="table"   data-search="true"  data-pagination="true">
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><center>Matricule</center></th>
						        <th   data-sortable="true"><center>Nom</center></th>
								<th   data-sortable="true"><center>Prénom</center></th>
								
								<th data-sortable="true"><center>Date naissance</center></th>
								<th data-sortable="true"><center>Adresse</center></th>
								<th  data-sortable="true"><center>Niveau</center></th>
								<th  data-sortable="true"><center>Mention</center></th>
								<th></th>
								<th > </th>
                                
							</tr>
						    </thead>
							<tbody>
							<?php 
						
							$q =  "select * from students ";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Matricule'] ; ?>
							</td>
							<td> 
							<?php echo $c['Nom']; ?>
							</td>
							<td> 
							<?php echo $c['Prenom']; ?>
							</td>
							<td> 
							<?php echo $c['Date_naiss'];   ?>
							</td>
							<td> 
							<?php echo $c['Adresse'];   ?>
							</td>
							<td> 
							<?php echo $c['Niveau'];   ?>
							</td>
							<td> 
							<?php echo $c['Mention'];   ?>
							</td>
                            
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_note.php?Matricule=".$c['Matricule']."\" class=\"btn\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_note.php?Matricule=".$c['Matricule']."\" class=\"btn\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							
						</table>
						
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
