<?php include_once "handleData.php"?>

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
  color: #FF0000;
  font-weight: bold;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: smaller;
}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style8 {font-size: smaller}
.style10 {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: smaller;
  font-weight: bold;
  color: #009933;
}
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
.style11 {color: #006633}
.style5 {
  font-size: smaller;
  font-weight: bold;
  color: #009933;
  font-family: Verdana, Arial, Helvetica, sans-serif;
}
.log_username {
  text-decoration: underline;
}
-->
</style>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCFFCC">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/LogotypeKvitka.gif" width="200" height="112" /></td>
    <td width="28%" valign="top"><div align="center">
      <table width="300" border="0" cellpadding="0" cellspacing="2" bgcolor="#F4FBEB">
        <tr>
          <td><span class="style10">(08) 9891234 </span></td>
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
    <td height="302" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td bgcolor="#C7EAB0"><span class="style3">&nbsp;<span class="style11">Danh mục
          </span></span>
          <table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td class="style7">&nbsp;<a href="index.php">Trang ch&#7911;</a></td>
            </tr>
            <tr>
              <td class="style7">&nbsp;<a href="tim_hoa.php">T&igrave;m ki&#7871;m b&oacute; hoa </a></td>
            </tr>
            <tr>
              <td class="style7">&nbsp;<a href="them_hoa.php">Th&ecirc;m m&#7899;i b&oacute; hoa </a></td>
            </tr>
          </table>      </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB">&nbsp;</td>
      </tr>
    </table>    
    <img src="hinh_anh/BannerSideCreative.jpg" width="200" height="200" /></td>
    <td colspan="3" valign="middle" bgcolor="#F4FBEB"><table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>    </td>
      </tr>
      <tr>
        <td >
          <p class="style5" align="center">
            Chúng tôi sẽ giao hàng cho bạn tại địa chỉ:<br>
            <?php 
                if(isset($_POST['submit_gh'])){
                  if(isset($_POST['dia_chi']) && $_POST['dia_chi'] != ''){
                    echo $_POST['dia_chi'];
                  }
                }
             ?>
          <?php unset($_SESSION['cart'])?>
        </td>
      </tr>
    </table>      <p>&nbsp;</p>    </td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#DEF4CE"><span class="style2">Copyright &copy;2003-2007 <br />
    Công ty thiết kế Ý Tưởng </span></td>
    <td valign="top" bgcolor="#DEF4CE"><span class="style8"></span></td>
    <td width="27%" valign="top" bgcolor="#DEF4CE"><span class="style8"></span></td>
    <td bgcolor="#DEF4CE"><span class="style7"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
      <a href="./ktphuong@hcmuns.edu.vn">ktphuong@hcmuns.edu.vn</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />hoadep.com.vn</span></td>
  </tr>
</table>
</body>
</html>
