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
					<div class="panel-heading">Formulaire Notes</div>
					<span><a href="ajouterNotes.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2">Ajouter</a></span>

						<table data-toggle="table"   data-search="true"  data-pagination="true" >
						    <thead>
						    <tr>
						                

						        <th data-sortable="true" ><center>N° Matricule</center></th>
						       
							    <th data-sortable="true"><center>Nom </center></th>
								<th data-sortable="true"><center>Prénom</center></th>
								
							    <th data-sortable="true"><center>Code Matiere</center></th>
								
							    <th  data-sortable="true"><center>Nom matiere</center></th>
								<th data-sortable="true"><center>Note Journaliere</center></th>
								
								<th data-sortable="true"><center>Note controle</center></th>
								
							</tr>
						    </thead>
							<tbody>
							<?php 
						//`Matricule``Note_journalier``Note_journalier`Cod_Mat```Note_controle`
							//$q =  "select * from notes ";
                             $q="SELECT notes.Matricule, students.Nom,students.Prenom, notes.Cod_mat, matiere.Nom_mat,notes.Note_journalier,notes.Note_controle FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat    ORDER BY notes.Matricule,notes.Cod_mat  ASC";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['Matricule'] ; ?>
							</td>
							 
							<td> 
							<?php echo $c['Nom'] ; ?>
							</td>
							<td> 
							<?php echo $c['Prenom'] ; ?>
							</td>
							<td> 
							<?php echo $c['Cod_mat']; ?>
							</td>
							<td> 
							<?php echo $c['Nom_mat']; ?>
							</td>
							<td> 
							<?php echo $c['Note_journalier'];   ?>
							</td>
						 
							<td> 
							<?php echo $c['Note_controle'];   ?>
							</td>
							
							<td>
							<td style = "text-align:center;">
							<?php //supprimer_note.php?Matricule=".$c['Matricule']."
						echo "<a href=\"modifierNotes.php?Matricule=".$c['Matricule']." AND  Cod_mat=".$c['Cod_mat']." AND Note_journalier=".$c['Note_journalier']."\" class=\"btn\">Modifier</span>" ;
							?>
							<td style = "text-align:center;"> 
							<?php 
			
	
			            echo "<a href=\"supprimer_avance.php?Matricule=".$c['Matricule']."\" class=\"btn\">Supprimer</span>" ;
		
		
							?>
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