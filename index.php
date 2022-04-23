<?php   session_start();

if(isset($_SESSION['cnx']) and $_SESSION['cnx']==true )
{
  

  header('location:acceuil.php');

}


    include('cnx.php');	
?>
<?php
 if(isset($_POST["btn"])  )
    {

	
    $q = "select count(*) as nbr from admin where nom = '".$_POST['user']."' and password = '".($_POST['password2'])."'";
	$r = $db -> query($q);
	$c = $r -> fetch();

    $q1 = "select * from admin where nom = '".$_POST['user']."' and password = '".($_POST['password2'])."'";
	$r1 = $db -> query($q1);
	$c1 = $r1 -> fetch();
    $id_user = $c1['user'] ;
    $_SESSION['user'] =$id_user;
    
	$nbr = $c['nbr'] ;
		if ($nbr == 1)
	{
            $_SESSION['cnx'] = true;

          
		echo" <script>alert(\"Compte bien ouvrir \")</script>"; 
		header('location:acceuilmENU.php');
	}else
	{ 
		
		
		header('location:index.php');
		echo "<script>alert(\"Les utilisateur incorect!\")</script>";
	}
    }
 ?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>
<link rel="stylesheet" href="login.css">
<!--
<link href="css/styles.css" rel="stylesheet">

<link href="LoginCss/style.css" rel="stylesheet">
-->
        

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<br><br><br>	
		
			<div class="login-panel panel panel-default">
				<div class="box" style="height: 420px;">
						<?php
if (isset($_GET['error']))
{
		echo '<div class="alert bg-danger" role="alert" style="width: 100%;
    height: 50px;">
          <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>  <a  class="pull-right" aria-hidden="true"></a>
        </div>' ;

}?>

  
<div class="header">
 	 <h2>Authentification</h2>
</div> 
   <form enctype="multipart/form-data" method="POST">
   <div class="input-group">
	<label>Utilisateur</label>     
      <input class="inputMaterial" type="text" name="user" placeholder="Entrez votre nom" required>
     
      
    </div>
	<div class="input-group">
		<label>Mot de passe</label>      
      <input class="inputMaterial" type="password" name="password2" placeholder="Entrez votre mot de pass" required>
     
     
    </div>
	<div class="input-group">
    <button name="btn"  class="btn" type="submit">Connexion</button>
	</div>
	<div id="footer-box" ><p class="footer-text"><span class="sign-up" ></span><a href="inscrire.php"><span class="sign-up" >Clic ici, Pour Créer un Compte</span></a></p></div>
</div>
</form>
 

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
