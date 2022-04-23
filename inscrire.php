


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
  <div class="header">
 	 <h2>Créer un nouveau compte</h2>
</div> 
  	
 <form action="inscription_bd.php" method="POST">		
			<div class=" panel ">


  <div class="box" style="height: 670px; top:-80px">
  
    <div class="input-group"> 
    <label>Nom</label>     
      <input class="inputMaterial" type="text" name="nom" placeholder="Entrez votre nom"  required>
      
     
    </div>
    <div class="input-group">  
      <label>Prénom</label>    
      <input  type="text" name="prenom" placeholder="Entrez votre prénom" required>
      
      
    </div>

     <div class="input-group"> 
     <label>Date de naissance  </label>     
      <input class="inputMaterial" type="Date" name="date" placeholder=" aaaa-mm-jj" required>
      
      
    </div>
     <div class="input-group"> 
     <label>Email</label>     
      <input class="inputMaterial" type="email" name="email" placeholder="email......@gmail.com" required>
     
      
    </div>
	    <div class="input-group"> 
      <label>Mot de passe</label>     
      <input class="inputMaterial" type="password" name="password2" placeholder="Entrez votre Mot de passe"  required>
     
      
    </div>
     <table>
     <tr>
    <td>
      <div class="input-group" >
      <button name="btn" class="btn"  type="submit">Enregister</button>
      </div>
    </td>
    <td>
    <div ><a href="index.php"><span class="sign-up" > Se connecter</span></a></p></div>
    </td>
  </tr>
  </table>
  </div>

</form>  
 
	
</body>

</html>
