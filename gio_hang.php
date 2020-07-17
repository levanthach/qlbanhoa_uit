<?php
if(isset($_SESSION["cart"]))
  	{
	  	$giohang=$_SESSION["cart"];
	  	if(count($giohang)>0)
	  	{
	 	  	$sl = 0;
	  		$tongtien = 0;
	  	foreach($giohang as $h)
	   	{
		  	$sl= $sl + $h['qty'];
            $tongtien += $h['qty'] * $h['price'];
		}
		 echo "Số lượng: ".$sl;
		 echo"<br>Tổng tiển: ".number_format($tongtien) . " VNĐ";
		 echo"<br><a href='trang_chi_tiet_gio_hang.php'>Chi tiết</a>";
	  }
	}
?>