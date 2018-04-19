<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" >
		<title>Groupe 97</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- Bootstrap -->
	    <link rel="stylesheet" type="text/css" href="views/css/style.css">
	    <link href="views/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="views/css/style.css">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->	
	</head>
	<body>
		<header>

			<nav class="navbar navbar-inverse navbar-fixed-top">
				<nav class="navbar navbar-expand navbar-dark bg-dark">
				
		            <a class="navbar-brand" href="index.php?action=accueil"><img class="icon-codepen-box" width="50px" height="50px" src="views/pictures/logo.png"></a>
		            
			    	<a class="navbar-brand" href="index.php?action=accueil">Accueil</a>
			     	

				<div class="collapse navbar-collapse" id="navbarsExample02">
					<ul class="nav navbar-nav">

						<?php 
						
							if(!isset($_SESSION['admin']) || $_SESSION['admin']==0){ ?>
								<li class="nav-item"><a class="nav-link" href="index.php?action=login">Connexion</a></li>
								<li class="nav-item"><a class="nav-link" href="index.php?action=register">Inscription</a></li>
						
						<?php 
							}else{
								 if($_SESSION['admin']>=1){ ?>
									<li class="nav-item"><a class="nav-link" href="index.php?action=membre">EspaceMembre</a></li>
						<?php 		
									if($_SESSION['admin']>=2){
						?>
										<li class="nav-item"><a class="nav-link" href="index.php?action=responsable">EspaceResponsable</a></li>
						<?php  		
									}
									if($_SESSION['admin']>=3){
						?>
										<li class="nav-item"><a class="nav-link" href="index.php?action=coach">EspaceCoach</a></li>
						<?php  		
									}
						?>
								</ul>
								<div class="navbar-form navbar-right inline-form">
						            <div class="form-group">
						              <a href="index.php?action=logout"><button type="submit" class="btn btn-primary btn-sm"></span> Déconexion</button></a>
						            	<img src="<?php echo $_SESSION['picture']; ?>" width="50px" height="50px" >
						            </div>
						        </div>
							</div>
						<?php	
								}
							}
						?>
					

			</nav>
		</header>
		<br><br>