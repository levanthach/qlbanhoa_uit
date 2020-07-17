<?php 
	require_once("connectDB.php");
	session_start();

	function getCategory(){
		$conn = db_connect();
		$sql = $conn->query("Select * from loaihoa");
		return $sql;
	}

	function getFlower($maloai){
		$conn = db_connect();
		$sql = $conn->query("Select * from hoa where maloai=" .$maloai);
		return $sql;
	}

	function getFlowerDetail($mahoa){
		$conn = db_connect();
		$sql = $conn->query("Select * from hoa where mahoa=" .$mahoa);
		return $sql;
	}

	function searchFlower($name){
		$conn = db_connect();
		$sql = $conn->query("Select * from hoa where tenhoa LIKE '%" . $name . "%'");
		return $sql;
	}

	function addFlower(){
		$conn = db_connect();
		if(isset($_POST['ten_hoa'])){
			$sql = "insert into hoa (maloai, tenhoa,dongia, hinh, mota) values(".$_POST["loai"].",'".$_POST["ten_hoa"]."','".$_POST["gia_ban"]."','".$_FILES["file"]["name"]."','".$_POST['mo_ta']."')";
			$conn->exec($sql);
			echo "<script>alert('Thêm dữ liệu thành công');</script>";
			// Thêm ảnh vào thư mục ở local
			move_uploaded_file($_FILES["file"]["tmp_name"], "hinh_anh/" . $_FILES["file"]["name"]);
		}
	}

	function addAcount() {
		$conn = db_connect();
		if(isset($_POST['ten_dn'])){
			$sql = "insert into khachhang (TenDN, MatKhau, HoTen, DienThoai, DiaChi, Email) values('".$_POST["ten_dn"]."','".$_POST["mat_khau"]."','".$_POST["ho_ten"]."','".$_POST["so_dt"]."','".$_POST['dia_chi']."','".$_POST['email']."')";
			$conn->exec($sql);
			echo "<script>alert('Tạo tài khoản thành công');</script>";

		}
	}

	function login($username, $password){
		$conn = db_connect();
		$sql = $conn->query("select TenDN, MatKhau from khachhang where TenDN='" .$username. "' AND MatKhau='" .$password. "'");
		return $sql; 
	}


	function getAccount($username){
		$conn = db_connect();
		$sql = $conn->query("select * from khachhang where TenDN='" .$username. "'");
		return $sql; 
	}

	function getCart($id){
		$conn = db_connect();
		$sql = $conn->query("select * from hoa where mahoa=".$id);
		return $sql;
	}

	function addOrder($makh) {
		$conn = db_connect();
		if(isset($_POST['dathang'])){
			$sql = "insert into donhang (ngaydh, makh, hoten, diachi, email, dienthoai, trangthai) values(CURDATE() ,'".$makh."','".$_POST["ho_ten"]."','".$_POST["dia_chi"]."','".$_POST["email"]."','".$_POST["dien_thoai"]."','1')";
			$conn->exec($sql);
			$last_id = $conn->lastInsertId();
		}
		return $last_id;
	}

	function addOrderDetail($sodh, $mahoa, $sl, $dongia, $thanhtien) {
		$conn = db_connect();
		if(isset($_POST['dathang'])){
			$sql = "insert into ctdonhang (sodh, mahoa, soluong, dongia, thanhtien) values('" .$sodh. "','".$mahoa."','".$sl."','".$dongia."','".$thanhtien."')";
			$conn->exec($sql);
		}
	}


?>