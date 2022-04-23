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
					<div class="panel-heading">Résultat D'examen</div>
						<table data-toggle="table"   data-search="true"  data-pagination="true" >
						    <thead>
						    <tr>
						                

						        <th data-sortable="true" ><center>N°CE</center></th>
						       
							    <th data-sortable="true"><center>Nom </center></th>
								<th data-sortable="true"><center>Prénom</center></th>
								<th data-sortable="true"><center>Mention</center></th>
								
								<th data-sortable="true"><center>Niveau</center></th>
								
							    <th data-sortable="true"><center>Code_Mat</center></th>
								
							    <th  data-sortable="true"><center> Matiere</center></th>
								<th  data-sortable="true"><center>Coef</center></th>
								
								<th data-sortable="true"><center>Note1</center></th>
								
								<th data-sortable="true"><center>Note2</center></th>
								<th data-sortable="true"><center>Note/20 </center></th>
								<th data-sortable="true"><center>Note Generale</center></th>
								
							</tr>
						    </thead>
							<tbody>
							<?php 
						//`Matricule``Note_journalier``Note_journalier`Cod_Mat```Note_controle`
							//$q =  "select * from notes ";
                             $q="SELECT notes.Matricule, students.Nom,students.Prenom, students.Mention,students.Niveau,notes.Cod_mat, matiere.Nom_mat,matiere.Coef_mat,notes.Note_journalier,notes.Note_controle FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat ORDER BY notes.Matricule,notes.Cod_mat ASC ";
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
							<?php echo $c['Mention'] ; ?>
							</td>
							<td> 
							<?php echo $c['Niveau'] ; ?>
							</td>
							<td> 
							<?php echo $c['Cod_mat']; ?>
							</td>
							<td> 
							<?php echo $c['Nom_mat']; ?>
							</td>
							<td> 
							<?php echo $c['Coef_mat']; ?>
							</td>
							<td> 
							<?php echo $c['Note_journalier'];   ?>
							</td>
						 
							<td> 
							<?php echo $c['Note_controle'];   ?>
							</td>
							<td>
							<?php echo ($c['Note_controle']+$c['Note_journalier'])/2;   ?>
							</td>
							<td>
							
							<?php echo (($c['Note_controle']+$c['Note_journalier'])/2)*$c['Coef_mat'];   ?>
							
							</td>
							</tr>	
							<?php
							}
							?>
							<div>
							
							<?php
							  $conn = new PDO('mysql:host=localhost;dbname=etude','root','');

							   // $recherche = $conn->query('SELECT matricule FROM etudiant WHERE mention="DAII" AND niveau = "'.$_POST['niveau'].'" ');
								$recherche = $conn->prepare('SELECT students.Matricule, students.Nom, SUM(((notes.Note_journalier+notes.Note_controle))) from students,notes,matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Matricule AND students.Matricule  ');
								$recherche->execute(array());
								while($res = $recherche->fetch()){
									echo "<option value='Matricule'>".$res['Matricule']."</option>";
								}
								
							?>
				
							</div>
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