<?php 
class OrderController
{
	public function order(){
		$posts = Order::all();
		require_once('views/pages/order.php');
	}

	public function orderCustomer(){
		$posts = Order::allC();
		require_once('views/pages/order_customer.php');
	}

	public function orderSupir(){
		$posts = Order::allS();
		require_once('views/pages/order_supir.php');
	}

	public function search(){
		$posts = Order::search($_GET["idOrder"]);
		require_once('views/pages/order.php');
	}

	public function searchC(){
		$posts = Order::searchC($_GET["idOrder"]);
		require_once('views/pages/order_customer.php');
	}

	public function searchS(){
		$posts = Order::search($_GET["idOrder"]);
		require_once('views/pages/order_supir.php');
	}
	public function tambah(){
		$posts2 = Order::Jarak();
		require_once('views/pages/tambah_order.php');
	}

	public function addData(){
		/*	echo "test";*/

		$order = Order::addData($_GET["customer"],$_GET["barang"],$_GET["idJarak"],$_GET["berat"],$_GET["volume"],$_GET["ket"]);
		header("location:index.php?controller=order&action=orderCustomer");
	}

	public function edit(){
		$posts = Order::edit($_GET["idOrder"]);
		require_once('views/pages/edit_order.php');
	}

	public function editData(){
		/*		echo "test";*/
		$order = Order::editData($_GET["idOrder"]);
		header("location:index.php?controller=order&action=order");
	}

	public function profil(){
		$posts = Order::profil($_GET["username"]);
		require_once('views/pages/edit_profil.php');
	}

	public function profil1(){
		$posts = Order::profil($_GET["username"]);
		require_once('views/pages/user_customer.php');
	}

	public function profil2(){
		$posts = Order::profil($_GET["username"]);
		require_once('views/pages/user_sopir.php');
	}

	public function editProfil(){
		/*		echo "test";*/
		$order = Order::editProfil($_GET["username"],$_GET["nama"],$_GET["password"]);
		header("location:index.php?controller=order&action=order");
	}

	public function profilSupir(){
		/*		echo "test";*/
		$order = Order::editProfil($_GET["username"],$_GET["nama"],$_GET["password"]);
		header("location:index.php?controller=order&action=orderSupir");
	}

	public function profilCustomer(){
		/*		echo "test";*/
		$order = Order::editProfil($_GET["username"],$_GET["nama"],$_GET["password"]);
		header("location:index.php?controller=order&action=orderCustomer");
	}

	public function editSupir(){
		/*echo "test";*/
		$order = Order::editSupir($_GET["idOrder"]);
		header("location:index.php?controller=order&action=orderSupir");
	}

	public function error(){
		require_once('views/pages/error.php');
	}
}
?>