<?php 

// class HomeController
// {

// 	public function homeBupati(){
// 		//$posts = Order::all();
// 		require_once('views/pages/homeBupati.php');
// 	}
// }

class HomeController
{


	public function home(){
		$error='';
		require_once('views/pages/home.php');
	}
	public function homeBupati(){
		// $posts=Usulan::allUsulan();
		// $posts2=Usulan::countUsulan();
		$posts=Home::countUsulan();
		require_once('views/pages/homeBupati.php');
	}



	public function homePariwisata(){
		$posts=Home::countUsulan();
		require_once('views/pages/homeDinasPariwisata.php');
	}
	public function homePerdagangan(){
		$posts=Home::countUsulan();
		require_once('views/pages/homeDinasPerdagangan.php');
	}

	public function homeKelurahan(){
		$posts=Home::countUsulan();
		require_once('views/pages/homeKelurahan.php');
	}
}

?>