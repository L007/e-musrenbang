<?php 
class Kamus
{
	public $idKamus;
	public $namaUsulan;
	public $jenisUsulan;
	public $pelaksana;


	function __construct($idKamus,$namaUsulan,$jenisUsulan,$pelaksana)
	{
		$this->idKamus=$idKamus;
		$this->namaUsulan=$namaUsulan;
		$this->jenisUsulan=$jenisUsulan;
		$this->pelaksana=$pelaksana;
		
	}


	public static function allFisik(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM kamus_usulan WHERE jenisUsulan ='usulan fisik'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Kamus($post['idKamus'],$post['namaUsulan'],$post['jenisUsulan'],$post['pelaksana']);
		}
		return $list;
	}
		public static function allNonFisik(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT * FROM kamus_usulan WHERE jenisUsulan ='usulan non fisik'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Kamus($post['idKamus'],$post['namaUsulan'],$post['jenisUsulan'],$post['pelaksana']);
		}
		return $list;
	}

}

?>