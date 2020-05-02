<?php 
	 session_start();
	function getCategory(){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("Select * from loaihoa");
		return $sql;
	}

	function getFlower($maloai){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("Select * from hoa where maloai=" .$maloai);
		return $sql;
	}

	function getFlowerDetail($mahoa){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("Select * from hoa where mahoa=" .$mahoa);
		return $sql;
	}

	function searchFlower($name){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("Select * from hoa where tenhoa LIKE '%" . $name . "%'");
		return $sql;
	}

	function addFlower(){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(isset($_POST['ten_hoa'])){
			$sql = "insert into hoa (maloai, tenhoa,dongia, hinh, mota) values(".$_POST["loai"].",'".$_POST["ten_hoa"]."','".$_POST["gia_ban"]."','".$_FILES["file"]["name"]."','".$_POST['mo_ta']."')";
			$conn->exec($sql);
			echo "<script>alert('Thêm dữ liệu thành công');</script>";
			// Thêm ảnh vào thư mục ở local
			move_uploaded_file($_FILES["file"]["tmp_name"], "hinh_anh/" . $_FILES["file"]["name"]);
		}
	}

	function addAcount() {
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(isset($_POST['ten_dn'])){
			$sql = "insert into khachhang (TenDN, MatKhau, HoTen, DienThoai, DiaChi, Email) values('".$_POST["ten_dn"]."','".$_POST["mat_khau"]."','".$_POST["ho_ten"]."','".$_POST["so_dt"]."','".$_POST['dia_chi']."','".$_POST['email']."')";
			$conn->exec($sql);
			echo "<script>alert('Tạo tài khoản thành công');</script>";

		}
	}

	function login($username, $password){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("select TenDN, MatKhau from khachhang where TenDN='" .$username. "' AND MatKhau='" .$password. "'");
		return $sql; 
	}

	function getCart($id){
		$conn = new PDO("mysql:host=localhost;dbname=qlbanhoa", 'qlbanhoa_user', 'zxcv1234');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = $conn->query("select * from hoa where mahoa=".$id);
		return $sql;
	}
?>