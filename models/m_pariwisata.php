<?php
class Pariwisata
{
	
	public $idKelurahan;
	public $nilaiKS;
	public $nilaiFP;
	public $nilaiAS;
	public $nilaiKK;
	public $nilaiPP;
	public $nilaiPS;
	public $totalScore;
	public $status;
	public $kelurahan;



	function __construct($idKelurahan,$nilaiKS,$nilaiFP,$nilaiAS,$nilaiKK,$nilaiPP,$nilaiPS,$totalScore,$status,$kelurahan)
	{

		$this->idKelurahan=$idKelurahan;
		$this->nilaiKS=$nilaiKS;
		$this->nilaiFP=$nilaiFP;
		$this->nilaiAS=$nilaiAS;
		$this->nilaiKK=$nilaiKK;
		$this->nilaiPP=$nilaiPP;
		$this->nilaiPS=$nilaiPS;
		$this->totalScore=$totalScore;
		$this->status=$status;
		$this->kelurahan=$kelurahan;
		
	}

	public static function all(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_pariwisata P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			order by P.totalScore desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Pariwisata($post['idKelurahan'],$post['nilaiKS'],$post['nilaiFP'],$post['nilaiAS'],
				$post['nilaiKK'],$post['nilaiPP'],$post['nilaiPS'],$post['totalScore'],
				$post['status'],$post['kelurahan']

				);
		}
		return $list;
	}

		public static function kelurahan(){
		
		$list = [];
		$db = DB::getInstance();
		$kelurahan = $_SESSION['login_user'];
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_pariwisata P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			where K.kelurahan='$kelurahan'
			order by P.totalScore desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Pariwisata($post['idKelurahan'],$post['nilaiKS'],$post['nilaiFP'],$post['nilaiAS'],
				$post['nilaiKK'],$post['nilaiPP'],$post['nilaiPS'],$post['totalScore'],
				$post['status'],$post['kelurahan']

				);
		}
		return $list;
	}

	public static function edit($idKelurahan){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_pariwisata P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			where P.idKelurahan='$idKelurahan'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Pariwisata($post['idKelurahan'],$post['nilaiKS'],$post['nilaiFP'],$post['nilaiAS'],
				$post['nilaiKK'],$post['nilaiPP'],$post['nilaiPS'],$post['totalScore'],
				$post['status'],$post['kelurahan']

				);
		}
		return $list;

	}

	public static function editData($idKelurahan,$nilaiKS,$nilaiFP,$nilaiAS,$nilaiKK,$nilaiPP,$nilaiPS)
	{
		$stat = "";
		$ts=0;

		$db = DB::getInstance();
		$req1 = $db->query("UPDATE tb_pariwisata SET 
			nilaiKS='$nilaiKS', nilaiFP='$nilaiFP', nilaiAS='$nilaiAS', nilaiKK='$nilaiKK', 
			nilaiPP='$nilaiPP',nilaiPS='$nilaiPS',

			totalScore=((('$nilaiKS'*39/100)+('$nilaiFP'*22/100)+('$nilaiAS'*14/100)+('$nilaiKK'*8/100)+
						('$nilaiPP'*7/100)+('$nilaiPS'*10/100))/9)*100
						
						WHERE idKelurahan='$idKelurahan'");
		$req2 = $db->query("SELECT totalScore from tb_pariwisata where idKelurahan='$idKelurahan'");
		
		foreach ($req2->fetchAll() as $r) {
			$ts = $r['totalScore'];
		}
		if ($ts<=100 && $ts>80) {
			$stat='sangat potensial';
		}
		elseif ($ts<=80 && $ts>=70) {
			$stat='potensial';
		}
		elseif ($ts<70 && $ts>=60) {
			$stat='cukup potensial';
		}
		elseif ($ts<60) {
			$stat='kurang potensial';
		}
		$req = $db->query("UPDATE tb_pariwisata SET status='".$stat."'  where idKelurahan='$idKelurahan'");
		return $req;
	}
}

?>