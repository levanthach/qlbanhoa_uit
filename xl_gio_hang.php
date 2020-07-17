<?php 
include_once "handleData.php";

if(isset($_REQUEST["maloai"])) {
	$maloaihoa = $_REQUEST["maloai"];
	if(isset($_GET['id']))
		$id = $_GET['id'];
	$cart = $_SESSION['cart'];
	$addCart = getCart($id);
	foreach ($addCart as $value) {
		if(!empty($_SESSION['cart'])){
        // kiem tra lan thu 2 mua hang da co trung voi mat hang da mua ko ? Neu trung thi tang so luong len 1
			if(array_key_exists($id, $cart)){
				$cart[$id] = array(
					'qty' => (int)$cart[$id]['qty'] + 1,
					'id' => $value['mahoa'],
					'price' => $value['dongia'],
					'name' => $value['tenhoa'],
				);
			}
			else{
				$cart[$id] = array(
					'qty' => 1,
					'id' => $value['mahoa'],
					'price' => $value['dongia'],
					'name' => $value['tenhoa'],
				);
			}
		}
		else {
        //Lan dau tien mua hang
			$cart[$id] = array(
				'qty' => 1,
				'id' => $value['mahoa'],
				'price' => $value['dongia'],
				'name' => $value['tenhoa'],
			);
		}
		$_SESSION['cart'] = $cart;
		echo"<script>location.href = 'index.php?maloai=".$maloaihoa."';</script>"; 
	}
}
?>