<?php 
class IndustriController
{


	// public function perdaganganDinas(){
	// 	$posts=perdagangan::all();
	// 	require_once('views/pages/perdaganganDinas.php');
	// }
	public function industriBupati(){
		$posts=industri::all();
		require_once('views/pages/industriBupati.php');
	}
	public function industriKelurahan(){
		$posts=industri::kelurahan();
		require_once('views/pages/industriKelurahan.php');
	}

	public function industriDinas(){
		$posts=industri::all();
		require_once('views/pages/industriDinas.php');
	}

	public function edit(){
		//header("location:index.php?controller=pariwisata&action=edit&idKelurahan=");
		$posts=industri::edit($_GET["idKelurahan"]);
		require_once('views/pages/editScoreIndustri.php');
	}
	public function editData(){
		$industri = industri::editData(
			$_GET["idKelurahan"],$_GET["nilaiJI"],$_GET["nilaiLS"],$_GET["nilaiTA"],
			$_GET["nilaiAS"]
			);
		header("location:index.php?controller=industri&action=industriDinas");
	}
}
?>