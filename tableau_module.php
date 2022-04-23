
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="modifierModule.css">


<script type="text/javascript">
   
    function delete_id(id)
    {
    if(confirm('Voulez-vous vrainmment supprimer cette étudiant ?')==true)
    {
		
    window.location.href='supprimer_module.php?delete_id='+id;
    }
	else{
		window.location.href='aff_module.php';	
	}
    }

 
</script>


 


	
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">Modules</div>
					<div class="panel-body">
					<span><a href="ajouter_mod.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" >Ajouter Module</a></span>
						<table data-toggle="table"   data-search="true"  data-pagination="true"  >
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><center>N° module</center></th>
						        <th   data-sortable="true"><center>Nom module</center></th>
						        <th data-sortable="true"><center>Nombres Heures</center></th>

								
							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from module";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Num_Module'] ; ?>
							</td>
							<td> 
							<?php echo $c['Nom_Module']; ?>
							</td>
							<td> 
							<?php echo $c['Nb_Heures'] ; ?>
							</td>
							
                            
							<td style = "text-align:center;">
							<?php 
						      echo "<a href=\"modifier_module.php?id=".$c['Num_Module']."\" class=\"btn\">Modifier</span>" ;
						

							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							
							<?php
							 echo "<a href=\"supprimer_module.php?id=".$c['Num_Module']."\" class=\"btn\">Suprimer</span>" ;
						
			            //echo "<a href=\"javascript:delete_id('<?php echo Num_Module=".$c['Num_Module'].";') \" class=\"btn\">Supprimer</span>" ;
		
							?>
							
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
							
						</table>
						
						<div class="input-grou">
                 
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