<?php 
class Order
{
	public $idOrder;
	public $customer;
	public $barang;
	public $tujuan;
	public $berat;
	public $volume;
	public $mobil;
	public $biaya;
	public $ket;
	public $ket2;
	public $status;
	public $approve;

	function __construct($idOrder,$customer,$barang,$tujuan,$berat,$volume,$mobil,$biaya,$ket,$ket2,$status,$approve)
	{
		$this->idOrder = $idOrder;
		$this->customer = $customer;
		$this->barang = $barang;
		$this->tujuan = $tujuan;
		$this->berat = $berat;
		$this->volume = $volume;
		$this->mobil = $mobil;
		$this->biaya= $biaya;
		$this->ket = $ket;
		$this->ket2 = $ket2;
		$this->status = $status;
		$this->approve=$approve;

	}


	public static function search($idOrder){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM orders where idOrder like '%$idOrder%' OR customer like '%$idOrder%' order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function searchS($idOrder){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM orders where verifikasi='telah disetujui' and (idOrder like '%$idOrder%' OR customer like '%$idOrder%') order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function searchC($idOrder){
		$list = [];
		$db = DB::getInstance();
		$customer=$_SESSION['login_user'];
		$req = $db->query("SELECT * FROM orders where idOrder like '%$idOrder%' AND customer='$customer' order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function Kota(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM kota");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idKota'],$post['kota'],$post['idKota'],$post['kota'],$post['idKota'],$post['kota'],$post['idKota'],$post['kota'],$post['idKota'],$post['kota'],$post['kota'],$post['kota']);
		}
		return $list;
	}

	public static function Jarak(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT idJarak, kota, (SELECT kota  from jarak jr join kota kk on jr.kotaTujuan=kk.idKota where jr.idJarak=j.idJarak ) as kotaTujuan, keterangan, jarak FROM jarak j join kota k on j.kotaAwal=k.idKota order by idJarak desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idJarak'],$post['kota'],$post['kotaTujuan'],$post['keterangan'],$post['jarak'],$post['idJarak'],$post['kota'],$post['kotaTujuan'],$post['keterangan'],$post['jarak'],$post['jarak'],$post['jarak']);
		}
		return $list;
	}

	public static function all(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM orders order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function allS(){
		$list = [];
		$db = DB::getInstance();
		$approve="telah disetujui";
		$req = $db->query("SELECT * FROM orders where verifikasi='$approve' order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function allC(){
		$list = [];
		$db = DB::getInstance();
		$customer=$_SESSION['login_user'];
		$req = $db->query("SELECT * FROM orders where customer='$customer' order by idOrder desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function addData($customer,$barang,$tujuan,$berat,$volume,$ket){
		$db = DB::getInstance();
		$status="blm dikirim";
		/*$idOrder=$db->query("SELECT MAX(idOrder) + 1 AS idOrder FROM Orders");*/
		$jrk=$db->query("SELECT jarak from jarak where idJarak=$tujuan");

		/*$id = 0;
		foreach ($idOrder->fetchAll() as $oke) {
			$id = $oke['idOrder'];
		}*/

		$jarak = 0;
		foreach ($jrk->fetchAll() as $ok) {
			$jarak = $ok['jarak'];
		}


		$jenis=0;
		if($berat>4000 || $volume>15){
			$jenis=2;
		}elseif ($berat>12000 || $volume>34) {
			$jenis=3;
		}else{
			$jenis=1;
		}

		$cost=$db->query("SELECT biaya from mobil where idMobil=$jenis");
		$byy = 0;
		foreach ($cost->fetchAll() as $o) {
			$byy = $o['biaya'];
		}

		$biaya=$byy*$jarak;
		$verifikasi="belum";

		$req = $db->query("INSERT INTO orders(idOrder, customer, barang, tujuan, berat, volume, mobil, biaya, ket, status,verifikasi) VALUES('".NULL."', '".$customer."', '".$barang."', '".$tujuan."', '".$berat."', '".$volume."','".$jenis."','".$biaya."','".$ket."','".$status."','".$verifikasi."')");
		return $req;
	}

	public static function edit($idOrder){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM Orders where idOrder='$idOrder'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idOrder'],$post['customer'],$post['barang'],$post['tujuan'],$post['berat'],$post['volume'],$post['mobil'],$post['biaya'],$post['ket'],$post['ket'],$post['status'],$post['verifikasi']);
		}
		return $list;
	}

	public static function profil($keterangan){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM user where nama='$keterangan'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Order($post['idUser'],$post['nama'],$post['password'],$post['nama'],$post['password'],$post['nama'],$post['password'],$post['nama'],$post['password'],$post['nama'],$post['password'],$post['password']);
		}
		return $list;
	}


	public static function editData($idOrder){
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM orders where idOrder='$idOrder'");
		$approve = "belum";
		foreach ($req->fetchAll() as $oke) {
			$status = $oke['status'];
		}

		if($approve=="belum"){
			$approve="telah disetujui";
		}
		$req = $db->query("UPDATE orders set verifikasi='$approve' where idOrder='$idOrder'");
		return $req;

	}

	public static function editProfil($keterangan,$ket,$status){
		$db = DB::getInstance();
		$req = $db->query("UPDATE user set nama='$ket', password='$status' where nama='$keterangan'");
		return $req;

	}

	public static function editSupir($idOrder){
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM orders where idOrder='$idOrder'");
		$status = "blm dikirim";
		foreach ($req->fetchAll() as $oke) {
			$status = $oke['status'];
		}
		

		if($status=="blm dikirim"){
			$status="dalam perjalanan";
		}else{
			$status="sudah sampai";
		}

		$req = $db->query("UPDATE orders set status='$status' where idOrder='$idOrder'");
		return $req;

	}
}
?>