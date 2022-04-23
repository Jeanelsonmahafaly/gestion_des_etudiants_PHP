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
					<div class="panel-heading">Observation</div>
					<button type="submit" class="form-controle">
					<a href="bilintin.php">Réleve</span>
				    </button>
						<table data-toggle="table"   data-search="true"  data-pagination="true"   >
						    <thead>
						    <tr>
						                

						        <th data-sortable="true" ><center>N°CE</center></th>
						       
							    <th data-sortable="true"><center>Nom </center></th>
								<th data-sortable="true"><center>Prénom</center></th>
								<th data-sortable="true"><center>Mention</center></th>
								
								<th data-sortable="true"><center>Niveau</center></th>
								
							    <th data-sortable="true"><center>Total Coef</center></th>
								
							    <th  data-sortable="true"><center>Total Note</center></th>
								<th  data-sortable="true"><center>Moyenne</center></th>
								
								<th data-sortable="true"><center>Observation</center></th>
								
								
							</tr>
						    </thead>
							<tbody>
							<?php 
						//`Matricule``Note_journalier``Note_journalier`Cod_Mat```Note_controle`
							//$q =  "select * from notes ";
                             $q="SELECT notes.Matricule, students.Nom,students.Prenom, students.Mention,students.Niveau, sum(matiere.Coef_mat) as Total_Coef,SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat) as Total_note ,(SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat)/sum(matiere.Coef_mat)) as moyenne FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat  GROUP BY Matricule";
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
							<?php echo $c['Total_Coef']; ?>
							</td>
							<td> 
							<?php echo $c['Total_note']; ?>
							</td>
							
							<td> 
							<?php echo $c['moyenne'];   ?>
							</td>
						     <td>
							 <?php
									$test=	$c['moyenne']; 
									
									if (10<=$test) {
										echo "reussi";
									}
									else {
										echo  "echec!";
									}
									

								?>
							 </td>
							 <td style = "text-align:center;">
							<?php 
						echo "<a href=\"bilintin.php?Matricule=".$c['Matricule']."\" class=\"btn\">Réleve</span>" ;
							?>
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