<?php 
class Usulan
{
	public $idUsulan;
	public $usulan;
	public $lokasi;
	public $kategori;
	public $keterangan;
	public $status;



	function __construct($idUsulan,$usulan,$lokasi,$kategori,$keterangan,$status)
	{
		$this->idUsulan=$idUsulan;
		$this->usulan=$usulan;
		$this->lokasi=$lokasi;
		$this->kategori=$kategori;
		$this->keterangan=$keterangan;
		$this->status=$status;
	}

	public static function allUsulan(){
		$list = [];
		$db = DB::getInstance();
		$kelurahan = $_SESSION['login_user'];
		$req = $db->query("SELECT * FROM usulan"
		);
		foreach ($req->fetchAll() as $post) {
			$list[] = new usulan($post['idUsulan'],$post['usulan'],$post['lokasi'],$post['kategori'],$post['keterangan'],$post['status']);
		}
		return $list;
	}
	public static function allUsulanDinasPerdagangan(){
		$list = [];
		$db = DB::getInstance();
		//$dinas = $_SESSION['login_user'];
		$req = $db->query("SELECT * FROM usulan where kategori='perdagangan'"
		);
		foreach ($req->fetchAll() as $post) {
			$list[] = new usulan($post['idUsulan'],$post['usulan'],$post['lokasi'],$post['kategori'],$post['keterangan'],$post['status']);
		}
		return $list;
	}
	public static function allUsulanDinasIndustri(){
		$list = [];
		$db = DB::getInstance();
		//$dinas = $_SESSION['login_user'];
		$req = $db->query("SELECT * FROM usulan where kategori='industri'"
			);
		foreach ($req->fetchAll() as $post) {
			$list[] = new usulan($post['idUsulan'],$post['usulan'],$post['lokasi'],$post['kategori'],$post['keterangan'],$post['status']);
		}
		return $list;
	}
	public static function allUsulanKelurahan(){
		$list = [];
		$db = DB::getInstance();
		$kelurahan = $_SESSION['login_user'];
		$req = $db->query("SELECT * FROM usulan WHERE idKelurahan = (
    		select idkelurahan from kelurahan where kelurahan ='$kelurahan'
    		)"
		);
		foreach ($req->fetchAll() as $post) {
			$list[] = new usulan($post['idUsulan'],$post['usulan'],$post['lokasi'],$post['kategori'],$post['keterangan'],$post['status']);
		}
		return $list;
	}

	public static function countUsulan(){
		return$jumlahUsulan;
	}
	public static function inputUsulanKelurahan(){
		$list=[];
		$db = DB::getInstance();
		$kelurahan = $_SESSION['login_user'];
		return $list;
	}
	public function addDataUsulanKelurahan($kelurahan,$usulan,$lokasi,$kategori,$keterangan){
		//$list=[];
		$db = DB::getInstance();
		//$kelurahan = $_SESSION['login_user'];
		$req=$db->query("INSERT INTO `usulan`
			Values (Null,
				(select idKelurahan from kelurahan where kelurahan = '$kelurahan'),'".$usulan."','".$lokasi."','".$kategori."','".$keterangan."','belum disetujui')");
		return $req;
	}

}

?>