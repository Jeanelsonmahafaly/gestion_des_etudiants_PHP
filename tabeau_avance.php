<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="login.css">

<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.25), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-body">
					<div class="panel-heading">Formulaire Note</div>
					<span><a href="acceuil_avance.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2">Ajouter</a></span>
						<table data-toggle="table"   data-search="true"  data-pagination="true" >
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><center>NumMatricule</center></th>
								<th  data-sortable="true" ><center>Cod Matiere</center></th>
						       
							    <th   data-sortable="true"><center>Note Journalier</center></th>
								<th data-sortable="true"><center>Note Controle</center></th>
								
							</tr>
						    </thead>
							<tbody>
							<?php 
						
							$q =  "select * from notes  order by matricule ";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Matricule'] ; ?>
							</td>
							<td> 
							<?php echo $c['Cod_mat'] ; ?>
							</td>
							<td> 
							<?php echo $c['Note_journalier']; ?>
							</td>
							<td> 
							<?php echo $c['Note_controle'];   ?>
							</td>
							<td> 
							
                            
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_avance.php? (Matricule=".$c['Matricule']." AND Cod_mat=".$c['Cod_mat'] .")\" class=\"btn\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			            echo "<a href=\"supprimer_avance.php?Matricule=".$c['Matricule']."\" class=\"btn\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
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