<?php 
class PerdaganganController
{

	public function perdaganganBupati(){
		$posts=perdagangan::all();
		require_once('views/pages/perdaganganBupati.php');
	}
	public function perdaganganKelurahan(){
		$posts=perdagangan::kelurahan();
		require_once('views/pages/perdaganganKelurahan.php');
	}
	public function perdaganganDinas(){
		$posts=perdagangan::all();
		require_once('views/pages/perdaganganDinas.php');
	}
	// public function industriDinas(){
	// 	$posts=industri::all();
	// 	require_once('views/pages/industriDinas.php');
	// }
	public function edit(){
		//header("location:index.php?controller=pariwisata&action=edit&idKelurahan=");
		$posts=perdagangan::edit($_GET["idKelurahan"]);
		require_once('views/pages/editScorePerdagangan.php');
	}
	public function editData(){
		$perdagangan = perdagangan::editData(
			$_GET["idKelurahan"],$_GET["nilaiJU"],$_GET["nilaiLJ"],$_GET["nilaiTA"],
			$_GET["nilaiAS"]
			);
		header("location:index.php?controller=perdagangan&action=perdaganganDinas");
	}
}
?>