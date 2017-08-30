<?php 
function call($controller, $action){
	require_once('controllers/c_'.$controller.'.php');

	switch ($controller) {
		case 'login':
		require_once('models/m_login.php');
		$controller=new LoginController();
		break;
		case 'home':
		$controller=new HomeController();
		require_once('models/m_home.php');
		break;
		case 'usulan':
		require_once('models/m_usulan.php');
		$controller=new UsulanController();
		break;
		case 'pariwisata':
		require_once('models/m_pariwisata.php');
		$controller=new PariwisataController();
		break;
		case 'perdagangan':
		require_once('models/m_perdagangan.php');
		// require_once('models/m_industri.php');
		$controller=new PerdaganganController();
		break;
		case 'industri':
		// require_once('models/m_perdagangan.php');
		require_once('models/m_industri.php');
		$controller=new IndustriController();
		break;
		case 'kamus':
		require_once('models/m_kamus.php');
		$controller=new KamusController();
		break;
		case 'mobil':
		require_once('models/mobil_model.php');
		$controller=new MobilController();
		break;
		
	}
	$controller->{ $action }();
}

$controllers = array('login' => ['login', 'error','authentication'],
	'home'=>['home','homeBupati','homePariwisata','homePerdagangan','homeKelurahan'],
	'pariwisata'=>['pariwisataBupati','pariwisataDinas','pariwisataKelurahan','edit','editData'],
	'perdagangan'=>['perdaganganBupati','perdaganganDinas','perdaganganKelurahan','edit','editData'],
	'industri'=>['industriKelurahan','industriBupati','industriDinas','edit','editData'],
	'kamus'=>['kamusUsulan','kamusUsulanKelurahan'],
	'usulan'=>['inputUsulanKelurahan','usulanKelurahan','usulanBupati','usulanDinasPariwisata','usulanDinasIndustri','usulanDinasPerdagangan','addDataUsulanKelurahan']
	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>