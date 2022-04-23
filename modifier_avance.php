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
  <script type="text/javascript">
     function edt_id()
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
          <em class="text-center " align ="center">Modification de information de matiere  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn1']))
{
//`Cod_mat``Nom_mat``Coef_mat`
  if(empty($_POST['Matricule']))
 {
  header('location:modifier_mat.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Matricule ="'.$_POST['Matricule'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_avance.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nom de module est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
        if($r2){
        ?>  <script type="text/javascript">
         alert("modification avec sucées");
            window.location.href('aff_notes.php'); 
          </script>
       <?php 
       } 
 } 
}
if(isset($_POST['btn10']))
{
//`Cod_mat``Nom_mat``Coef_mat`
  if(empty($_POST['Cod_mat']))
 {
  header('location:modifier_mat.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Cod_mat ="'.$_POST['Cod_mat'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_avance.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nom de module est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
        if($r2){
        ?>  <script type="text/javascript">
         alert("modification avec sucées");
            window.location('aff_avance.php'); 
          </script>
       <?php 
       } 
 } 
}




if(isset($_POST['btn2']))
{

  if(empty($_POST['Note_journalier']))
 {
  header('location:modifier_avance.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Note_journalier ="'.$_POST['Note_journalier'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      echo "<script> <alert>Bien Modifier </alert></script>";
 header('location:modifier_mat.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nombres d heures est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
        if($r2){
          ?>  <script type="text/javascript">
              alert("modification avec sucées");
              window.location('aff_avance.php'); 
            </script>
         <?php 
         }
 } 
}

if(isset($_POST['btn3']))
{
//Coef_mat
  if(empty($_POST['Note_controle']))
 {
  header('location:modifier_avance.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {
//`Cod_mat``Nom_mat``Coef_mat`

      
      $q2 = 'update matiere set Note_controle ="'.$_POST['Note_controle'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
 header('location:modifier_mat.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-success" role="alert">
          <svg class="glyph stroked checkmark"><use xlink:href="#stroked-checkmark"></use></svg> Votre nombres d heures est bien modifié! <a href="#" class="pull-right"></a>
        </div>'; 
        if($r2){
        ?>  <script type="text/javascript">
         alert("modification avec sucées");
            window.location('aff_avance.php'); 
          </script>
       <?php 
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
     
 


              $q =  "select * from notes where Matricule='".$_GET['Matricule']."' AND Cod_mat='".$_GET['Cod_mat']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              
              <tr>
              <td> <label> <center> Matricule:</center></label></td>
              <td> <input class="form-contro" name="Matricule" type="text" value="<?php echo $c['Matricule'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1">Changer</button> </td>
              </tr>
              <tr>
              <td> <label> <center> Code Matiere:</center></label></td>
              <td> <input class="form-contro" name="Cod_mat" type="text" value="<?php echo $c['Cod_mat'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn10">Modifier</button> </td>
              </tr>
              <tr>
              <td> <label><center>Note journaliere:</center> </label></td>
              <td> <input class="form-contro" name="Note_journalier" type="text" value="<?php echo $c['Note_journalier'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2">Changer</button> </td>
              </tr>

              <tr>
              <td> <label><center>Note Controle:</center> </label></td>
              <td> <input class="form-contro" name="Note_controle" type="text" value="<?php echo $c['Note_controle'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn3" onclick="edt_id()">Changer</button> </td>
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

  