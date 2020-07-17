       <table width="100%" border="0" cellpadding="0" cellspacing="2">

        <form id="form1" name="form1" method="post" action="index.php">
         <tr>

          <td colspan="2"><div align="center" class="style5">Đăng nhập</div></td>
        </tr>
        <tr>
          <td width="30%"><p class="style10">Tên đăng nhập: </p></td>
          <td width="55%"><span class="style10">
            <label>
              <input name="ten_dn" type="text" id="ten_dn" size="15" />
            </label>
          </span> </td>
        </tr>
        <tr>
          <td><p class="style10">Mật khẩu: </p></td>
          <td><span class="style10">
            <label>
              <input name="mat_khau" type="password" id="mat_khau" size="15" />
            </label>
          </span></td>
        </tr>

        <td colspan="2"><div align="center">
          <label>
            <input type="submit" name="Submit" value="Đăng nhập" />
          </label>
        </div></td>
      </tr>
    </form>


  </table>

  <?php 
  if(isset($_POST['Submit'])){
    if(!empty($_POST['ten_dn']) && !empty($_POST['ten_dn'])){
      $username = $_POST['ten_dn'];
      $pass = $_POST['mat_khau'];
      $login = login($username, $pass);
      if($login->rowCount() > 0){
        $_SESSION['username'] = $username;
        echo"<script>location.href = './';</script>";
      }
      else {
        echo "<div style='color:red'>Thông tin tài khoản hoặc mật khẩu không chính xác </div>";
      }
    }
  }
  ?>