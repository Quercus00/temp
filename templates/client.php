<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BCF - Client</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&family=Pacifico&display=swap" rel="stylesheet">
</head>
<header>
    <div class="header-bar">
        <a href="index.html"><img class="logo" src="../static/images/BCF_transparent.png" ></a>
    </div>
</header>

<?php
		 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
		 $conn ->select_db('bcf');
		
		
?>
<body class="container">
	<div class="felicitation">
		<p>Vous êtes bien connecté sur le compte <?php $_SESSION['email'] ?> </p>
	</div>
  
   <div>
		<form method="post" enctype="multipart/form-data" class="depot">
			<div class="annonce">
				<label for="file">Sélectionner le fichier contenant la mamographie que vous aimeriez faire vérifier</label>
				<input type="file" id="file" name="file" multiple>
			</div>
			<div class="but">
				<button class='verif' name="verif">Faire vérifier </button>
			</div>
		</form>
  </div>
</body>


<footer class="spe">
        <div class="foot">
            <p><i>L'IA au service de la santé</i></p>
            <! -- Liens vers page qui sommes-nous  -->
        </div>
        <div class="foot">
              <p><i>Copyright © BCF - 2020</i></p>
              <p>Contactez nous au : 0616344513 </p>
        </div>
        <div class="foot">
            <p><a href="https://www.facebook.com/BreastCancerFinder/?notif_id=1605289323338281&notif_t=page_fan&ref=notif" target="_blank" rel="nofollow">Facebook</a></p>
            <p> <a href="https://www.facebook.com/BreastCancerFinder/?notif_id=1605289323338281&notif_t=page_fan&ref=notif" target="_blank" rel="nofollow">Instagram</a></p>
            <! -- Liens vers nos réseaux sociaux  -->
        </div>

    </footer>
	<?php
	if(isset($_POST['verif'])){
			extract($_POST);
			
			echo 'mise en marche du relais';
			$python = exec('python test.py');
			echo $python;
			
	}
	?>
</html>