<?php 
	/**
	* 
	*/
	class LoginController
	{

		public function login(){
			$error='';
			require_once('views/pages/login.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			$error='';
			if (!isset($_GET['username'])) {
				//return call('pages','error');
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('views/pages/login.php');
			}else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=home&action=homeBupati");
			}elseif(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=order&action=orderCustomer");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==3){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=home&action=homeKelurahan");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==4){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=order&action=orderCustomer");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==5){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=home&action=homePariwisata");
			}
			elseif(Login::find($_GET['username'],$_GET['password'])==6){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=home&action=homePerdagangan");
			}
			else{
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=order&action=orderSupir");
			}
		}
		
}
?>