<?php
	#Test Github
	session_start();
	# Prise du temps actuel au début du script
	$time_start = microtime(true);

	# Variables globales du site
	define('CHEMIN_VUES','views/');
	$date = date("j/m/Y");
	
	# Automatisation de l'inclusion des classes de la couche modèle
	function chargerClasse($classe) {
		require_once('models/' . $classe . '.class.php');
	}
	spl_autoload_register('chargerClasse'); 

	# Tester si une variable GET 'action' est précisée dans l'URL index.php?action=...
	$action = (isset($_GET['action'])) ? htmlentities($_GET['action']) : 'default';

	# Ecrire ici le header de toutes pages HTML
	require_once(CHEMIN_VUES . 'header.php');

	# Quelle action est demandée ?
	switch($action) {	
		case 'membre':
			require_once ('controllers/MembreController.php');
			$controller = new MembreController();
			break;
		case 'responsable':
			require_once ('controllers/ResponsableController.php');
			$controller = new ResponsableController();
			break;
		case 'coach':
			require_once ('controllers/CoachController.php');
			$controller = new CoachController();
			break;
		case 'login':
			require_once ('controllers/LoginController.php');
			$controller = new LoginController();
			break;
		case 'logout':
			require_once ('controllers/LogoutController.php');
			$controller = new LogoutController();
			break;
		case 'register':
			require_once ('controllers/RegisterController.php');
			$controller = new RegisterController();
			break;
		default: # Par défaut, le contrôleur de l'accueil est sélectionné
			require_once('controllers/AccueilController.php');	
			$controller = new AccueilController();
			break;
	}
	# Exécution du contrôleur correspondant à l'action demandée
	$controller->run();
	
	$time_end = microtime(true);
	$time = number_format(($time_end - $time_start)*1000,6);
	# Ecrire ici le footer du site de toutes pages HTML
	require_once(CHEMIN_VUES . 'footer.php');
?>