<?php
class Perdagangan
{
	
	public $idKelurahan;
	public $nilaiJU;
	public $nilaiLJ;
	public $nilaiTA;
	public $nilaiAS;
	public $totalScore;
	public $status;
	public $kelurahan;



	function __construct($idKelurahan,$nilaiJU,$nilaiLJ,$nilaiTA,$nilaiAS,$totalScore,$status,$kelurahan)
	{

		$this->idKelurahan=$idKelurahan;
		$this->nilaiJU=$nilaiJU;
		$this->nilaiLJ=$nilaiLJ;
		$this->nilaiTA=$nilaiTA;
		$this->nilaiAS=$nilaiAS;
		$this->totalScore=$totalScore;
		$this->status=$status;
		$this->kelurahan=$kelurahan;
		
	}

	public static function all(){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_perdagangan P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			order by P.totalScore desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Perdagangan($post['idKelurahan'],$post['nilaiJU'],$post['nilaiLJ'],
				$post['nilaiTA'],$post['nilaiAS'],$post['totalScore'],$post['status'],$post['kelurahan']
				);
		}
		return $list;
	}

	public static function kelurahan(){
		$list = [];
		$db = DB::getInstance();
		$kelurahan = $_SESSION['login_user'];
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_perdagangan P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			where K.kelurahan='$kelurahan'
			order by P.totalScore desc");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Perdagangan($post['idKelurahan'],$post['nilaiJU'],$post['nilaiLJ'],
				$post['nilaiTA'],$post['nilaiAS'],$post['totalScore'],$post['status'],$post['kelurahan']
				);
		}
		return $list;
	}



	public static function edit($idKelurahan){
		$list = [];
		$db = DB::getInstance();
		$req = $db->query("SELECT K.kelurahan,P.* 
			from tb_perdagangan P join kelurahan K on(P.idKelurahan=K.idKelurahan)
			where P.idKelurahan='$idKelurahan'");
		foreach ($req->fetchAll() as $post) {
			$list[] = new Perdagangan($post['idKelurahan'],$post['nilaiJU'],$post['nilaiLJ'],$post['nilaiTA'],
				$post['nilaiAS'],$post['totalScore'],$post['status'],$post['kelurahan']
				);
		}
		return $list;

	}

		

	public static function editData($idKelurahan,$nilaiJU,$nilaiLJ,$nilaiTA,$nilaiAS)
	{
		$stat = "";
		$ts=0;

		$db = DB::getInstance();
		$req1 = $db->query("UPDATE tb_perdagangan SET 
			nilaiJU='$nilaiJU', nilaiLJ='$nilaiLJ', nilaiTA='$nilaiTA', nilaiAS='$nilaiAS',

			totalScore=((('$nilaiJU'*45/100)+('$nilaiLJ'*27/100)+('$nilaiTA'*17/100)+('$nilaiAS'*11/100))/9)*100

		WHERE idKelurahan='$idKelurahan'");
		$req2 = $db->query("SELECT totalScore from tb_perdagangan where idKelurahan='$idKelurahan'");
		
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
		$req = $db->query("UPDATE tb_perdagangan SET status='".$stat."'  where idKelurahan='$idKelurahan'");
		return $req;
	}
	
}

?>