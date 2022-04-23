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
      document.location="tableau_module.php"
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
          <em class="text-center " align ="center">Changer les modules  </em>
          </div>

          <div class="panel-body">
          <?php


if(isset($_POST['btn1']))
{

  if(empty($_POST['module']))
 {
  header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update Module set Nom_Module = "'.$_POST['module'].'" where Num_Module="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de nom de module N°= ".$_GET['id']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_module.php" ;

        
            </script>
            <?php
        }else{
          echo mysqli_error($db); 
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}





if(isset($_POST['btn2']))
{

  if(empty($_POST['heures']))
 {
  header('location:modifier_module.php?id='.$_GET['id'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update Module set Nb_Heures = "'.$_POST['heures'].'" where Num_Module="'.$_GET['id'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification de Nombre heure de module N°= ".$_GET['id']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_module.php" ;

        
            </script>
            <?php
        }else{
          echo mysqli_error($db); 
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
     
 


              $q =  "select * from Module where Num_Module='".$_GET['id']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              <tr>
              <td> <label><center>Numéro :</center> </label></td>
              <td> <input  name="num" type="text" value="<?php echo $c['Num_Module'];?>"></td>
              
              </tr>
              <tr>
              <td> <label> <center>Nom Module:</center></label></td>
              <td> <input name="module" type="text" value="<?php echo $c['Nom_Module'];?>"></td>
              <td><button type="submit" class="btn" name="btn1" onclick="edt_id()">changer</button> </td>
              </tr>
              <tr>
              <td> <label><center>Nombres D'Heures:</center> </label></td>
              <td> <input name="heures" type="text" value="<?php echo $c['Nb_Heures'];?>"></td>
              <td><button type="submit" class="btn" name="btn2" onclick="edt_id()">changer</button> </td>
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

  