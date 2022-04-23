<?php   session_start();

if(!isset($_SESSION['cnx']) or $_SESSION['cnx']==false )
{
  

  header('location:index.php');
}


 
?>
<!DOCTYPE html>
<?php
  //session_start();
  include('cnx.php');
?>
<html>
<head>
  
  
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
<!--Icons-->
<?php include('inccss.php'); ?>
<?php include('incjs.php'); ?>

</head>

<STYLE TYPE="text/css">

              input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
  border:2px solid #03b1ce ;}
  .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}

</STYLE>


<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php include('header.php'); ?>
</nav>

        
  <?php include('menu.php'); ?>




<div class="col-sm-8 col-sm-offset-3 col-lg-offset-2 main">
	<div class="row " >
		<h2></h2>
        
        
       <div class="col-md-8 offset-md-3">

<div class="panel panel-default col-sm-12 col-sm-offset-4 "style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
  <div class="panel-heading">  <h3><strong>Mon Profil</strong></h3></div>
   <div class="panel-body">
       
    <div class="box box-info">
        

                <!--Upload Image Js And Css-->
           
    <?php           
   $ID=$_SESSION['id_user'];

 $sql = "SELECT * FROM Admin  where id=$ID "; //

 
 
 $result=$db->query($sql);  

 $data=$result->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $donnee){
    



                
  ?>              
                     
             <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img  src="<?php  echo $donnee['image'];  ?>"  id="profile-image1" class="img-circle img-responsive"  > 
               
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >Cliquer ici pour changer la photo de votre profil</div>                    
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Nom :</div><div class="col-sm-7 col-xs-6 "><?php echo $donnee["nom"]; ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Prénom :</div><div class="col-sm-7"><?php echo $donnee["prenom"]; ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date de naissance :</div><div class="col-sm-7"> <?php echo $donnee["date_naissance"]; ?></div>


  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email :</div><div class="col-sm-7"><?php echo $donnee["email"]; ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mot de passe:</div><div class="col-sm-7"><?php echo $donnee["password"]; ?></div>

<?php
}
                
  ?> 


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>

</body>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
        </script> 
       
   </div>
</div>




         