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
    if(confirm('êtes-vous modifier vraiment ?'))
    {
    window.location.href='modifier_mat.php';
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
  if(empty($_POST['Cod_mat']))
 {
  header('location:modifier_mat.php?Cod_mat='.$_GET['Cod_mat'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Cod_mat ="'.$_POST['Cod_mat'].'" where Cod_mat="'.$_GET['Cod_mat'].'" ';
      $r2 = $db ->query($q2); 

      if ($r2==true){
        echo"<script>confirm('modification de matiere de  code matiere= ".$_GET['Cod_mat']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_matiere.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}
if(isset($_POST['btn10']))
{
//`Cod_mat``Nom_mat``Coef_mat`
  if(empty($_POST['Num_Module']))
 {
  header('location:modifier_mat.php?Cod_mat='.$_GET['Cod_mat'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nom du module! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Num_Module ="'.$_POST['Num_Module'].'" where Cod_mat="'.$_GET['Cod_mat'].'" ';
      $r2 = $db ->query($q2); 
      if ($r2==true){
        echo"<script>confirm('modification  de module de   code= ".$_GET['Cod_mat']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_matiere.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 } 
}




if(isset($_POST['btn2']))
{

  if(empty($_POST['Nommat']))
 {
  header('location:modifier_mat.php?Cod_mat='.$_GET['Cod_mat'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Nom_mat ="'.$_POST['Nommat'].'" where Cod_mat="'.$_GET['Cod_mat'].'" ';
     
      $r2 = $db ->query($q2);
      if ($r2==true){
        echo"<script>confirm('modification de matiere de  code = ".$_GET['Cod_mat']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_matiere.php" ;

        
            </script>
            <?php
        }else{
         
          echo"<script>alert('ereur de modification')</script>";
        } 
 
  

 } 
}

if(isset($_POST['btn3']))
{
//Coef_mat
  if(empty($_POST['Coef']))
 {
  header('location:modifier_mat.php?Cod_mat='.$_GET['Cod_mat'].'');   
echo '<div class="alert bg-danger" role="alert">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Saisie le nombtre d heure! <a  class="pull-right" aria-hidden="true"></a>
        </div>';  

        
 }else
 {


      
      $q2 = 'update matiere set Coef_mat ="'.$_POST['Coef'].'" where Cod_mat="'.$_GET['Cod_mat'].'" ';
      $r2 = $db ->query($q2); 

      if ($r2==true){
        echo"<script>confirm('modification de coefficient de  code= ".$_GET['Cod_mat']." avec sucées ')</script>";
         
            ?>
            <script language="javascript">
               
                  
              document.location.href = "aff_matiere.php" ;

        
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
     
 


              $q =  "select * from matiere where Cod_mat='".$_GET['Cod_mat']."'";
              $r = $db -> query($q) ;
              while ($c = $r -> fetch())
              {


              ?>
              
              <tr>
              <td> <label> <center> Code Matiere:</center></label></td>
              <td> <input class="form-contro" name="Cod_mat" type="text" value="<?php echo $c['Cod_mat'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn1" onclick="edt_id()">Modifier</button> </td>
              </tr>
              <tr>
              <td> <label> <center> Num_Module:</center></label></td>
              <td> <input class="form-contro" name="Num_Module" type="text" value="<?php echo $c['Num_Module'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn10" onclick="edt_id()">Modifier</button> </td>
              </tr>
              <tr>
              <td> <label><center>Nom Matiere:</center> </label></td>
              <td> <input class="form-contro" name="Nommat" type="text" value="<?php echo $c['Nom_mat'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn2" onclick="edt_id()">Modifier</button> </td>
              </tr>

              <tr>
              <td> <label><center>Coef:</center> </label></td>
              <td> <input class="form-contro" name="Coef" type="text" value="<?php echo $c['Coef_mat'];?>"></td>
              <td><button type="submit" class="btn btn-primary" name="btn3" onclick="edt_id()">Modifier</button> </td>
              </tr>

              
              <?php
              }
              ?>
              </tbody>
            </table>
            
          </div>
        </div>
      
        </form>
      </div>
          
</div>
</div>

  <?php include('incjs.php'); ?>
</body>
</html>

  