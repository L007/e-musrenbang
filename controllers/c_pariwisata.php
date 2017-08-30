<?php 
class PariwisataController
{


	public function pariwisataBupati(){
		$posts=Pariwisata::all();
		require_once('views/pages/pariwisataBupati.php');
	}
	public function pariwisataKelurahan(){
		$posts=Pariwisata::kelurahan();
		require_once('views/pages/pariwisataKelurahan.php');
	}
	public function pariwisataDinas(){
		$posts=Pariwisata::all();
		require_once('views/pages/pariwisataDinas.php');
	}
	public function edit(){
		//header("location:index.php?controller=pariwisata&action=edit&idKelurahan=");
		$posts=Pariwisata::edit($_GET["idKelurahan"]);
		require_once('views/pages/editScorePariwisata.php');
	}
	public function editData(){
		$pariwisata = Pariwisata::editData(
			$_GET["idKelurahan"],$_GET["nilaiKS"],$_GET["nilaiFP"],$_GET["nilaiAS"],
			$_GET["nilaiKK"],$_GET["nilaiPP"],$_GET["nilaiPS"]


			);
		header("location:index.php?controller=pariwisata&action=pariwisataDinas");
	}
}
?>