<?php session_start(); ?>
<!doctype html>
<html lang="fr">
	<head>
			<link rel="stylesheet" type="text/css" href="css/style.css" title="default" />
			<meta name="viewport" content="width=device-width, target-densitydpi=device-dpi"/>
			<meta charset="utf-8">
			<script type="text/javascript" src="includes/js/jquery.js"></script>
			<script type="text/javascript" src="soundmanager/script/soundmanager2.js"></script>
			<script type="text/javascript" src="includes/js/gestionMusiqueFond.js"></script>
			<script type="text/javascript">
				function switchLoginRegister()
				{
					if (document.getElementById('register').style.display == "none")
					{
						document.getElementById('register').style.display = "block";
						document.getElementById('login').style.display = "none";
					}else{
						document.getElementById('register').style.display = "none";
						document.getElementById('login').style.display = "block";
					}
				}
				function showRadio() 
				{
					var n = 10
					for(i=1;i<=n;i++) {
						if(document.getElementById('choix'+i).checked == true) {
							document.getElementById('D'+i).style.display = "block";
						} else {
							document.getElementById('D'+i).style.display = "none";
						}
					}
	 			}

			</script>
			<title>Xeerud</title>
	</head>
	<body>

		<?php 
			include("includes/headerXeerud.php");
			include("includes/fonct.php");
		?>

		<div class="page">
			<?php
				echo"<div id='fondBlanc'>";

					include("includes/sliderRaces.html");
					if ($resultInscription==-1){
						echo "<div id='couleurErreur'>";
							echo "<p>Pseudo déjà utilisé!</p>";	
						echo "</div>";
					}
					if($echoErreurID==1){
						echo "<div id='couleurErreur'>";
							echo "<p>Erreur identifiants!</p>";
						echo "</div>";
					}else if($echoErreurID==0)
					{
						echo "<div id='couleurReussite'>";
							echo "<p>Connexion en cours...</p>";
						echo "</div>";
						header('refresh:2;http://dwarves.iut-fbleau.fr/~dieuset/proj_tut/Projet/xeerud/xeerud.php');
					}

					include("includes/connexion.html");

					echo"<div class='register'>";
						echo"<input onclick='switchLoginRegister();' value='No account yet ? Register here !' type='button'>";
						echo"<div id='register' style='display: none;'>";

							include("includes/inscription.html");

						echo"</div>";
					echo"</div>";	
				echo"</div>";
			?>
		</div>	

	</body>
	
</html>
