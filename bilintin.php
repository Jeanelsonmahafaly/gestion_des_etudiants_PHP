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
          <em class="text-center " align ="center"> <h2>Réleve de note</h2> </em>
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

   
      

<form  method="POST" enctype="multipart/form-data"   >  
<div class="col-md-1">
</div>    
<div class="col-md-10">
      <br><br>
          <div class="panel-body">
         
          <?php
          //`Matricule``Nom``Prenom``Date_naiss``Adresse``Niveau``Mention`
          //$q="SELECT notes.Cod_mat as codm, matiere.Nom_mat as nomm,matiere.Coef_mat as coefm,((notes.Note_journalier+notes.Note_controle)/2)as notesur20 ,(matiere.Coef_mat *((notes.Note_journalier+notes.Note_controle)/2))as noteGenerale FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat AND notes.Matricule='".$_GET['Matricule']."' ORDER BY notes.Cod_mat ASC";						
              $q =  "SELECT `Matricule`, `Nom`, `Prenom`, `Date_naiss`, `Adresse`, `Niveau`, `Mention` FROM `students` WHERE Matricule='".$_GET['Matricule']."'";
              $r = $db -> query($q) ;
              $c = $r -> fetch()
              


              ?>
                           
                            <table>
                            <th emplace="center"> Bilintin de note de l'etudient </th>
                             <tr>
                                <td><label >Matricule</label> </td>
                                <td> <label >Nom</label> </td>
                                <td><label >Prenom</label> </td>
                                <td><label >Date de naissance</label></td>
                                <td><label>Niveau</label></td>
                                <td><label>Mention</label></td>
                                </tr> 
                                <tr>    
                                <td>   
                                <input class="form-controle" name="Matricule" type="text" value="<?php echo $c['Matricule'];?>">
                                </td>
                               
                                <td>
                                    <input class="form-controle" name="Nom" type="text" value="<?php echo $c['Nom'];?>">
                                
                                    </td>
                                    <td>
                                    <input class="form-controle" name="Prenom" type="text" value="<?php echo $c['Prenom'];?>">
                    
                            
                                    </td>
                                    <td><input class="form-controle" name="Date_naiss" type="text" value="<?php echo $c['Date_naiss'];?>">
                                </td>
                                    <td><input class="form-controle" name="Niveau" type="text" value="<?php echo $c['Niveau'];?>">
                                </td>
                                <td>
                                <input class="form-controle" name="Mention" type="text" value="<?php echo $c['Mention'];?>">
                                </td>
                                
							</tr>	
							
          
                        </table>
          <table data-toggle="table"    >
						    <thead>
						    <tr>
						                

                            	
							    <th data-sortable="true"><center>Code_Mat</center></th>
								<th data-sortable="true"><center>Matiere</center></th>
								
								<th data-sortable="true"><center>Note1</center></th>
								
							    <th  data-sortable="true"><center>Note2</center></th>
								<th  data-sortable="true"><center>Coef</center></th>
								
								<th data-sortable="true"><center>Note/20 </center></th>
								<th data-sortable="true"><center>Note Generale</center></th>
								
							</tr>
						    </thead>
							<tbody>
							<?php 
     
 

    // $q="SELECT notes.Matricule, students.Nom,students.Prenom, students.Mention,students.Niveau, sum(matiere.Coef_mat) as Total_Coef,SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat) as Total_note ,(SUM(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat)/sum(matiere.Coef_mat)) as moyenne FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat  GROUP BY Matricule";
	//$q="SELECT notes.Cod_mat as codm, matiere.Nom_mat as nomm,matiere.Coef_mat as coefm,((notes.Note_journalier+notes.Note_controle)/2)as notesur20 ,(matiere.Coef_mat *((notes.Note_journalier+notes.Note_controle)/2))as noteGenerale FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat AND notes.Matricule='".$_GET['Matricule']."' ORDER BY notes.Cod_mat ASC";						
              $q =  "select notes.Matricule,students.Nom as mmm, notes.Cod_mat,matiere.Nom_mat as ccc, notes.Note_journalier , notes.Note_controle,matiere.Coef_mat as coef ,(notes.Note_journalier+notes.Note_controle)/2 as notsur ,(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat) as notcoef from students, notes,matiere where students.Matricule=notes.Matricule and matiere.Cod_mat=notes.Cod_mat and  notes.Matricule='".$_GET['Matricule']."'";
              $r = $db -> query($q) ;
              
              while ($c = $r -> fetch())
              {


              ?>
                          
                            
							
							<td>
                            <input class="form-control" name="Cod_mat" type="text" value="<?php echo $c['Cod_mat'];?>">
               
						
							</td>
                            <td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['ccc'];?>">
              
					
							</td>

							<td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['Note_journalier'];?>">
              
					
							</td>
                            
							<td> 
                            <input class="form-control" name="Note_controle" type="text" value="<?php echo $c['Note_controle'];?>">
                            </td>
                            <td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['coef'];?>">
              
					
							</td>
                           
                            <td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['notsur'];?>">
              
					
							</td>
                           
                            <td> 
                            <input class="form-control" name="Note_journalier" type="text" value="<?php echo $c['notcoef'];?>">
              
					
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
                        <?php
          //`Matricule``Nom``Prenom``Date_naiss``Adresse``Niveau``Mention`
          //$q="SELECT notes.Cod_mat as codm, matiere.Nom_mat as nomm,matiere.Coef_mat as coefm,((notes.Note_journalier+notes.Note_controle)/2)as notesur20 ,(matiere.Coef_mat *((notes.Note_journalier+notes.Note_controle)/2))as noteGenerale FROM students, notes, matiere WHERE students.Matricule=notes.Matricule AND matiere.Cod_mat=notes.Cod_mat AND notes.Matricule='".$_GET['Matricule']."' ORDER BY notes.Cod_mat ASC";						
              $q =  "select notes.Matricule,students.Nom as mmm, notes.Cod_mat,matiere.Nom_mat as ccc, notes.Note_journalier , notes.Note_controle,sum(matiere.Coef_mat) as coefr ,(notes.Note_journalier+notes.Note_controle)/2 as notsur ,sum(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat) as notcoefr,((sum(((notes.Note_journalier+notes.Note_controle)/2)*matiere.Coef_mat))/(sum(matiere.Coef_mat))) as moyen from students, notes,matiere where students.Matricule=notes.Matricule and matiere.Cod_mat=notes.Cod_mat and  notes.Matricule='".$_GET['Matricule']."'";
            
              $r = $db -> query($q) ;
              $c = $r -> fetch()
              


              ?>
            <table>
                             <tr>
                                <td><label >Somme de coefficient:</label> </td>
                                <td>   
                                <input class="form-controle" name="coefr" type="text" value="<?php echo $c['coefr'];?>">
                                </td>
                                <td><label >Somme de note:</label> </td>
                                <td>   
                                <input class="form-controle" name="notcoefr" type="text" value="<?php echo $c['notcoefr'];?>">
                                </td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td><label >Moyenne:</label> </td>
                                <td>   
                                <input class="form-controle" name="moyen" type="text" value="<?php echo $c['moyen'];?>">
                                </td>
                                <td><label >OBSERVATION:</label> </td>
                                
                                 
							<?php echo $c['moyen'];   ?>
							
						     <td><H1>
							 <?php
									$test=	$c['moyen']; 
									
									if (10<=$test) {
										echo "reussi";
									}
									else {
										echo  "echec!";
									}
									

								?>
                                </H1>
							 </td>
                               
                            </tr>
                         
            </table>
            <table>
               <tr></tr>     
               <tr><u><h4>Signature de résponsable</h4></u>
                <u><h4>Signature d'étudiant</h4></u></tr>
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

  