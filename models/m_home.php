<?php 
class Home
{
	
	public $jumlahUsulan;
	public $jumlahSetuju;
	public $jumlahKerjakan;
	public $jumlahNilai;


	function __construct($jumlahUsulan,$jumlahSetuju,$jumlahKerjakan,$jumlahNilai)
	{
		
		$this->jumlahUsulan=$jumlahUsulan;
		$this->jumlahSetuju=$jumlahSetuju;
		$this->jumlahKerjakan=$jumlahKerjakan;
		$this->jumlahNilai=$jumlahNilai;


	}

	public static function countUsulan(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT count(*) as jumlahUsulan,
			(SELECT count(status) from usulan where status='diterima') as jumlahSetuju,
            (SELECT count(status) from usulan where status='dikerjakan') as jumlahKerjakan,
            (SELECT count(status) from usulan where status='dinilai') as jumlahNilai from usulan");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Home($post['jumlahUsulan'],$post['jumlahSetuju'],$post['jumlahKerjakan'],$post['jumlahNilai']);
		}
		return $list;
	}

	// public static function status(){
	// 	$list = [];
	// 	$db = DB::getInstance();
	// 	$req = $db->query("SELECT status from usulan limit 1");
	// 	foreach ($req->fetchAll() as $post) {
	// 		$jumlahSetuju=__set($post['status']);

	// 	}
	// 	return $jumlahSetuju
	// }
}

?>