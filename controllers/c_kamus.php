<?php 


class KamusController
{

	public function kamusUsulan(){
		$posts=Kamus::allFisik();
		$posts2=Kamus::allNonFisik();
		require_once('views/pages/kamusUsulan.php');
	}
		public function kamusUsulanKelurahan(){
		$posts=Kamus::allFisik();
		$posts2=Kamus::allNonFisik();
		require_once('views/pages/kamusUsulanKelurahan.php');
	}
	// public function kamusNonFisik(){
		
	// 	require_once('views/pages/kamusUsulan.php');
	// }
}

?>