<?php 

class UsulanController
{

	public function usulan(){
		$posts=Usulan::countUsulan();
		require_once('views/pages/homeBupati.php');
	}
	public function usulanBupati(){
		$posts=Usulan::allUsulan();
		require_once('views/pages/usulanBupati.php');
	}
	public function usulanKelurahan(){
		$posts=Usulan::allUsulanKelurahan();
		require_once('views/pages/usulanKelurahan.php');
	}
	public function usulanDinasPariwisata(){
		$posts=Usulan::allUsulanDinas();
		require_once('views/pages/usulanDinasPariwisata.php');
	}
	public function usulanDinasIndustri(){
		$posts=Usulan::allUsulanDinasIndustri();
		require_once('views/pages/usulanDinasIndustri.php');
	}
	public function usulanDinasPerdagangan(){
		$posts=Usulan::allUsulanDinasPErdagangan();
		require_once('views/pages/usulanDinasPerdagangan.php');
	}

	public function inputUsulanKelurahan(){
		$posts=Usulan::inputUsulanKelurahan();
		require_once('views/pages/inputUsulanKelurahan.php');
	}
	public function addDataUsulanKelurahan(){
		$posts=Usulan::addDataUsulanKelurahan($_GET["kelurahan"],$_GET["usulan"],$_GET["lokasi"],$_GET["kategori"],$_GET["keterangan"]);
		header("location:index.php?controller=usulan&action=usulanKelurahan");
	}
}

?>