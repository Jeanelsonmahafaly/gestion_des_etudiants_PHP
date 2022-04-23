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
  <script>     
  function edt_ids()
    {
    if(confirm('êtes-vous modifier vraiment ?')==false){
      document.location="tableau_mat.php"
     }
    }
     </script>     
                    
 
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
          <em class="text-center " align ="center">Modification des informations d'étudiant  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn1']))
{

  if(empty($_POST['Nom']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Nom ="'.$_POST['Nom'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de nom N°= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
       
 } 
}

if(isset($_POST['btn8']))
{

  if(empty($_POST['Prenom']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Prenom ="'.$_POST['Prenom'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de Prenom N°= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}





if(isset($_POST['btn2']))
{

  if(empty($_POST['Date_naiss']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Date_naiss ="'.$_POST['Date_naiss'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de date de naissance N°= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        }
 } 
}

if(isset($_POST['btn3']))
{

  if(empty($_POST['Adresse']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Adresse ="'.$_POST['Adresse'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de adresse N°= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        }
 } 
}

if(isset($_POST['btn4']))
{

  if(empty($_POST['Niveau']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Niveau ="'.$_POST['Niveau'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de Niveau N°= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}
if(isset($_POST['btn5']))
{

  if(empty($_POST['Mention']))
 {
  header('location:modifier_note.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update students set Mention="'.$_POST['Mention'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de matiere de  code matiere= ".$_GET['Matricule']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_note.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        }
 } 
}
?>

<div class="col-md-12">

<form  method="POST" enctype="multipart/form-data"   >  
<div class="col-md-1">
</div>    
<div class="col-md-10">
      <br><br>
          <div class="panel-body">
            <table data-toggle="table" id="table-style" data-url="tables/data2.json" data-row-style="rowStyle">
                <thead>
                <tr>
                    <th data-field="id" data-align="right" >Champs</th>
                    <th data-field="name" >Informations</th>
                    <th data-field="price" >Action</th>
                </tr>
                </thead>
              <tbody>
              <?php
     
 


              $q =  "select * from students where Matricule='".$_GET['Matricule']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              <tr>
                
              <td> <label><center>Matricule :</center> </label></td>
              <td> <input class="form-control" name="Matricule" type="text" value="<?php echo $c['Matricule'];?>"></td>
              
              </tr>
              <tr>
              <td> <label> <center>Nom :</center></label></td>
              <td> <input class="form-control" name="Nom" type="text" value="<?php echo $c['Nom'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1" onclick="edt_ids()">Modifier</button> </td>
              </tr>
              <tr>
              <td> <label> <center>Prénom :</center></label></td>
              <td> <input class="form-control" name="Prenom" type="text" value="<?php echo $c['Prenom'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn8"onclick="edt_ids()">Modifier</button> </td>
              </tr>
              <tr>
              <td> <label><center>Date_naiss:</center> </label></td>
              <td> <input class="form-control" name="Date_naiss" type="date" value="<?php echo $c['Date_naiss'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2" onclick="edt_ids()">Modifier</button> </td>
              </tr>

              <tr>
              <td> <label><center>Adresse:</center> </label></td>
              <td> <input class="form-control" name="Adresse" type="text" value="<?php echo $c['Adresse'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn3" onclick="edt_ids()">Modifier</button> </td>
              </tr>

              <tr>
              <td> <label><center>Niveau:</center> </label></td>
              <td> <input class="form-control" name="Niveau" type="text" value="<?php echo $c['Niveau'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn4" onclick="edt_ids()">Modifier</button> </td>
              </tr>

              <tr>
              <td> <label><center>Mention:</center> </label></td>
              <td> <input class="form-control" name="Mention" type="text" value="<?php echo $c['Mention'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn5" onclick="edt_ids()">Modifier</button> </td>
              </tr>
            
              <?php
              }
              ?>
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


  