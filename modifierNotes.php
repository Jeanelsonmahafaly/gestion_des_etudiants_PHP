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
  function edt_id()
    {
    if(confirm('êtes-vous modifier vraiment ?')==false){
      document.location="tab_Notes.php"
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
          <em class="text-center " align ="center">Changer les Notes  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn2']))
{

  if(empty($_POST['Note_controle']))
 {
  header('location:modifierNotes.php?matricule='.$_GET['matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update notes set Note_controle = "'.$_POST['Note_controle'].'" where Matricule="'.$_POST['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de  note controle avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "afficherNote.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}





if(isset($_POST['btn1']))
{

  if(empty($_POST['Note_journalier']))
 {//`Note_journalier``Note_controle`
  header('location:modifierNotes.php.php?Matricule='.$_GET['Matricule'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update notes set Note_journalier = "'.$_POST['Note_journalier'].'" where Matricule="'.$_GET['Matricule'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de  note journaliere avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "afficherNote.php" ;

        
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
                    <th data-field="price" >Modifier</th>
                </tr>
                </thead>
              <tbody>
              <?php
     
 
//where Matricule='".$_GET['Matricule']."' AND  Cod_mat='".$_GET['Cod_Mat']."'

              $q =  "select * from notes where Matricule='".$_GET['Matricule']."'    ";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              <tr>
              <td> <label><center>N°Matricule :</center> </label></td>
              <td> <input  name="Matricule" class="form-controle" type="text" value="<?php echo $c['Matricule'];?>"></td>
              
              </tr>
              <tr>
              <td> <label> <center>Code Matiere:</center></label></td>
              <td> <input name="Cod_mat" class="form-controle"  type="text" value="<?php echo $c['Cod_mat'];?>"></td>
             </tr>
              <tr>
              <td> <label> <center>Note Journalier:</center></label></td>
              <td> <input name="Note_journalier" class="form-controle" type="number" value="<?php echo $c['Note_journalier'];?>"></td>
              <td><button type="submit" class="btn" name="btn1" onclick=" edt_id()">changer</button> </td>
              </tr>
              <td> <label> <center>Note Controle:</center></label></td>
              <td> <input name="Note_controle" class="form-controle" type="number" value="<?php echo $c['Note_controle'];?>"></td>
              <td><button type="submit" class="btn" name="btn2" onclick=" edt_id()">changer</button> </td>
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

  