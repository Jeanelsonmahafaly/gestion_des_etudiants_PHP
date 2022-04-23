

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
	include('cnx.php');
	
	?>
	<Script>
	if(confirm('êtes-vous  vraiment  supprimer?'))
    {
	
   
	 <?php
   
	$q1 = "DELETE FROM notes WHERE Matricule = '".$_GET['Matricule']."'";
	$r1 = $db->query($q1);

	 ?>
   
    }
	</Script>
	<script>
	   document.location='afficherNote.php';
	</script>
	<?php
	

    


	

	
?>
</body>
</html>

