<?php include_once "handleData.php" ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cua hang Hoa Dep</title>
<style type="text/css">
<!--
.style2 {
	color: #000099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style3 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style10 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
	font-weight: bold;
	color: #009933;
}
.style15 {font-size: smaller}
a:link {
	color: #006633;
}
a:visited {
	color: #006633;
}
a:hover {
	color: #009900;
}
a:active {
	color: #009900;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#DEF4CE">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="199" height="115" /></td>
    <td width="28%" valign="top"><div align="center">
      <table width="300" border="0" cellpadding="0" cellspacing="2" bgcolor="#F4FBEB">
        <tr>
          <td><span class="style10">(08) 9891234 </span></td>
        </tr>
        <tr>
          <td><span class="style8">(Giờ mở cửa: 8:00 - 22:00 mỗi ngày) </span></td>
          </tr>
        <tr>
          <td><span class="style8"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn </a></span></td>
          </tr>
        <tr>
          <td><span class="style8"><img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
          </tr>
      </table>
    </div></td>
    <td colspan="3" valign="top"><div align="right"><img src="hinh_anh/top.jpg" width="450" height="113"></div></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#C7EAB0"><span class="style3">&nbsp;Danh mục
          </span>
          <table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td>&nbsp;<a href="index.php" class="style8">Trang ch&#7911;</a></td>
            </tr>
            <tr>
              <td>&nbsp;<a href="tim_hoa.php" class="style8">T&igrave;m ki&#7871;m b&oacute; hoa </a></td>
            </tr>
            <tr>
              <td height="21">&nbsp;<a href="them_hoa.php" class="style8">Th&ecirc;m m&#7899;i b&oacute; hoa </a></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB">&nbsp;</td>
      </tr>
    </table>    
    <img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" /></td>
    <td colspan="3" valign="middle" bgcolor="#F4FBEB"><p>&nbsp;</p>

      <?php 
          if(isset($_SESSION['username'])) {

       ?>
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">
              <p align="center"><br><br>
          <table border="1" width="600">
            <tr >
              <td colspan="5" align="center">Giỏ hàng của <b><?php echo $_SESSION['username'] ?></b></td>
            </tr>
             <tr>
                <th>Mã bó hoa</th>
                <th>Tên bó hoa</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Thành tiền</th>
               
             </tr>
              <?php 
              if(isset($_SESSION['username'])){
                if(isset($_GET['id']))
                $id = $_GET['id'];
                $cart = $_SESSION['cart'];
                $tong = 0;
                $addCart = getCart($id);
                foreach ($addCart as $value) {
                  if(!empty($_SESSION['cart'])){
                    // kiem tra lan thu 2 mua hang da co trung voi mat hang da mua ko ? Neu trung thi tang so luong len 1
                    if(array_key_exists($id, $cart)){
                        $cart[$id] = array(
                        'qty' => (int)$cart[$id]['qty'] + 1,
                        'id' => $value['mahoa'],
                        'price' => $value['dongia'],
                        'name' => $value['tenhoa']
                      );
                    }
                    else{
                      $cart[$id] = array(
                        'qty' => 1,
                        'id' => $value['mahoa'],
                        'price' => $value['dongia'],
                        'name' => $value['tenhoa']
                      );
                    }
                  }
                  else {
                    //Lan dau tien mua hang
                     $cart[$id] = array(
                        'qty' => 1,
                        'id' => $value['mahoa'],
                        'price' => $value['dongia'],
                        'name' => $value['tenhoa']
                      );
                  }
                 $_SESSION['cart'] = $cart;
                } 
                 foreach ($_SESSION['cart'] as $key => $v) {
                      echo "<tr align='center'>";
                      echo "<td>".$v['id']."</td>";
                      echo "<td>".$v['name']."</td>";
                      echo "<td>".$v['qty']."</td>";
                      echo "<td>".number_format($v['price'])."</td>";
                      echo "<td>". number_format($v['qty'] * $v['price'])."</td>";
                      echo "</tr>";
                      $tong += $v['qty'] * $v['price'];
                  }
                  
              }
                 ?>
                  <tr >
              <td colspan="5" align="right"><em>Tổng cộng:</em> <b><?php echo number_format($tong) ?></b></td>
            </tr>
         </table>
         <a href="index.php">Quay lại</a>

      </p>
       <form name="form1" method="post" action="trang_giao_hang.php">
        <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><span class="style3">Địa chỉ giao hàng:</span></td>
            <td><input name="dia_chi" type="text" id="dia_chi" size="30"></td>
          </tr>
          <tr>
            <td height="30" colspan="2" align="center"><input type="submit" name="submit_gh" value="Đặt hàng"></td>
          </tr>
        </table>
      </form>
          </td>
        </tr>
      </table>
       <?php 
            } 
            else {
              echo "Bạn cần phải đăng nhập để có thể đặt mua!";
              
            }
          ?>
      <p>&nbsp;</p>
      <p align="center" class="style3">&nbsp;</p>
    </td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#DEF4CE"><span class="style2">Copyright &copy;2003-2007 <br />
    Công ty thiết kế Ý Tưởng </span></td>
    <td valign="top" bgcolor="#DEF4CE"><span class="style15"></span></td>
    <td width="27%" valign="top" bgcolor="#DEF4CE"><span class="style15"></span></td>
    <td bgcolor="#DEF4CE"><span class="style8"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
	    <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
  </tr>
</table>
</body>
</html>
