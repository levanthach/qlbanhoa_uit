<?php include_once "handleData.php"; ?>
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
}
.style4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #009933;
}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style11 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
	font-weight: bold;
	color: #009933;
}
.style16 {font-size: smaller}
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
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="200" height="112" /></td>
    <td width="28%" valign="top"><div align="center">
      <table width="300" border="0" cellpadding="0" cellspacing="2" bgcolor="#F4FBEB">
        <tr>
          <td><span class="style11">(08) 9891234 </span></td>
        </tr>
        <tr>
          <td><span class="style7">(Giờ mở cửa: 8:00 - 22:00 mỗi ngày) </span></td>
          </tr>
        <tr>
          <td><span class="style7"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn </a></span></td>
          </tr>
        <tr>
          <td><span class="style7"><img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
          </tr>
      </table>
    </div></td>
    <td colspan="3" valign="top"><div align="right"><img src="hinh_anh/top.jpg" width="450" height="113"></div></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#C7EAB0"><span class="style3">&nbsp;<span class="style7">Danh mục hoa
          </span></span>
          <table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td><span class="style7">&nbsp;<a href="index.php">Trang ch&#7911;</a></span></td>
            </tr>
            <tr>
              <td><span class="style7">&nbsp;<a href="tim_hoa.php">T&igrave;m ki&#7871;m b&oacute; hoa </a></span></td>
            </tr>
            <tr>
              <td><span class="style7">&nbsp;<a href="them_hoa.php">Th&ecirc;m m&#7899;i b&oacute; hoa </a></span></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB">&nbsp;</td>
      </tr>
    </table>    
    <img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" /></td>
    <td colspan="3" valign="top"><p>&nbsp;</p>
      <form action="trang_dang_ky.php" method="post" enctype="multipart/form-data" name="form1">
        <table width="70%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#E6F6D9">
          <tr bgcolor="#D7F2C5">
            <td colspan="2" bgcolor="#D7F2C5"><div align="center" class="style4"> ĐĂNG KÝ</div></td>
          </tr>
          <tr>
            <td width="28%"><p class="style7">&nbsp;Tên đăng nhập: </p></td>
            <td width="72%"><label>
              <input name="ten_dn" type="text" id="ten_dn" size="35">
            </label></td>
          </tr>
          <tr>
            <td><p class="style7">&nbsp;Mật khẩu:</p></td>
            <td><label>
              <input name="mat_khau" type="password" id="mat_khau">
            </label></td>
          </tr>
          <tr>
            <td><span class="style7">&nbsp;Mật khẩu xác nhận:</span></td>
            <td><input name="mat_khau1" type="password" id="mat_khau1"></td>
          </tr>
          <tr>
            <td><p class="style7">&nbsp;Họ và tên: </p></td>
            <td><label>
              <input name="ho_ten" type="text" id="ho_ten" size="35">
            </label></td>
          </tr>
          <tr>
            <td><p class="style7">&nbsp;Địa chỉ email: </p></td>
            <td><label>
              <input name="email" type="text" id="email" size="35">
            </label></td>
          </tr>
          <tr>
            <td><span class="style7">&nbsp;Địa chỉ liên lạc:</span></td>
            <td><input name="dia_chi" type="text" id="dia_chi" size="45"></td>
          </tr>
          <tr>
            <td><p class="style7">&nbsp;Số điện thoại: </p></td>
            <td><label>
              <input name="so_dt" type="text" id="so_dt">
            </label></td>
          </tr>
          <tr>
            <td height="35" colspan="2"><p align="center">
              <label>
              <input type="submit" name="Submit" value="Đăng ký">
              </label>
            </p></td>
          </tr>
        </table>
      </form>
    
    <?php 
        if(isset($_POST['Submit'])){
            if($_POST['ten_dn'] != '' && $_POST['mat_khau'] != '' && $_POST['mat_khau1'] != '' && $_POST['ho_ten'] != '' && $_POST['email'] != '' && $_POST['dia_chi'] != '' && $_POST['so_dt'] != ''){
              if($_POST['mat_khau1'] == $_POST['mat_khau']){
                  addAcount();
                }
                else echo "Xác nhận mật khẩu chưa chính xác. Vui lòng nhập lại!";            }
            else
            {
              echo "Bạn phải nhập đủ dữ liệu";
            }
          }  
    ?>     
</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#DEF4CE"><span class="style2">Copyright &copy;2003-2007 <br />
    Công ty thiết kế Ý Tưởng </span></td>
    <td valign="top" bgcolor="#DEF4CE"><span class="style16"></span></td>
    <td width="27%" valign="top" bgcolor="#DEF4CE"><span class="style16"></span></td>
    <td bgcolor="#DEF4CE"><span class="style7"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
	    <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
  </tr>
</table>
</body>
</html>
