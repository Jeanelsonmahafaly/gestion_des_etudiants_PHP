<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');

}





 
?>
<!DOCTYPE html>
<?php
 include('cnx.php');
?>
<html>
<head>
  <?php include('inccss.php'); ?>
  <link rel="stylesheet" href="modifierModule.css">
       
            
 
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

<?php include('menu.php'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
<br><br><br>

<div class="panel panel-default" align="center">

          <div class="panel-heading">
          <em class="text-center " align ="center">Réleve de note </em>
          </div>

          <div class="panel-body">
          <?php
if(isset($_POST['btn1']))
{?>
<script type="text/javascript">
         alert("modification avec sucées");
            window.location('affbiletin.php'); 
</script>
<?php
}
?>
<div class="col-md-12">
<select name="cbrecherche" id="cbrech">
      
      <option value="matricule">Matricule</option>
      <?php
                                //$conn = new PDO('mysql:host=localhost;dbname=etude','root','');

                                 // $recherche = $conn->query('SELECT matricule FROM etudiant WHERE mention="DAII" AND niveau = "'.$_POST['niveau'].'" ');
                                  $recherche = $db->prepare('SELECT Matricule FROM students ');
                                  $recherche->execute(array($_POST['Matricule']));
                                  while($res = $recherche->fetch()){
                                    ?>
                                      <option value="<?php echo ($res['Matricule']); ?>">
                                            <?php echo ($res['Matricule']); ?>
                                      </option>
                                      <?php }
                                  
                              ?>                     
      </select>

<form  method="POST" enctype="multipart/form-data"   >  
<div class="col-md-1">
</div>    
<div class="col-md-10">
      <br><br>
          <div class="panel-body">
          <table data-toggle="table"   data-search="true"  data-pagination="true" >
						    <thead>
						    <tr>
						                

                            <th data-sortable="true"><center>Matricule</center></th>
								
							    <th data-sortable="true"><center>Code_Mat</center></th>
								<th data-sortable="true"><center>Note1</center></th>
								
								<th data-sortable="true"><center>Note2</center></th>
								
							    <th  data-sortable="true"><center>Matiere</center></th>
								<th  data-sortable="true"><center>Coef</center></th>
								
								<th data-sortable="true"><center>Note/20 </center></th>
								<th data-sortable="true"><center>Note Generale</center></th>
								
							</tr>
						    </thead>
							<tbody>
							<?php 
     
 

    // $q="SELECT notes.Matricule, students.Nom,students.Prenom, students.Mention,students.Niveau, sum(matiere.Coef_mat) as Total_Coef,SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat) as Total_note ,(SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat)/sum(matiere.Coef_mat)) as moyenne FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat  GROUP BY Matricule";
	$q="SELECT notes.Cod_mat as codm, matiere.Nom_mat as nomm,matiere.Coef_mat as coefm,((notes.Note_journalier+notes.Note_controle)/2)as notesur20 ,(matiere.Coef_mat *((notes.Note_journalier+notes.Note_controle)/2))as noteGenerale FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat AND notes.Matricule='".$_GET['Matricule']."' ORDER BY notes.Cod_mat ASC";						
              $q =  "select * from notes where Matricule='".$_GET['Matricule']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
                            <td>      
                            <input class="form-control" name="Matricule" type="text" value="<?php echo $c['Matricule'];?>">
							
							</td>
							<td>
                            <input class="form-control" name="Cod_mat" type="text" value="<?php echo $c['Cod_mat'];?>">
               
						
							</td>
							<td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['Note_journalier'];?>">
              
					
							</td>
							<td> 
                            <input class="form-control" name="Note_controle" type="text" value="<?php echo $c['Note_controle'];?>">
           
						
							
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
            
              
             
              
            <script>
                $(function () {
                    $('#hover, #striped, #condensed').click(function () {
                        var classes = 'table';
            
                        if ($('#hover').prop('checked')) {
                            classes += ' table-hover';
                        }
                        if ($('#condensed').prop('checked')) {
                            classes += ' table-condensed';
                        }
                        $('#table-style').bootstrapTable('destroy')
                            .bootstrapTable({
                                classes: classes,
                                striped: $('#striped').prop('checked')
                            });
                    });
                });
            
                function rowStyle(row, index) {
                    var classes = ['active', 'success', 'info', 'warning', 'danger'];
            
                    if (index % 2 === 0 && index / 2 < classes.length) {
                        return {
                            classes: classes[index / 2]
                        };
                    }
                    return {};
                }
            </script>
          </div>
        </div>
      
        </form>
      </div>
          
</div>
</div>

  <?php include('incjs.php'); ?>
</body>
</html>

  