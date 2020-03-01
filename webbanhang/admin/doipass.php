<?php 
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['tentaikhoan'];
		$matkhaucu = $_POST['matkhaucu'];
		$matkhaumoi = $_POST['matkhaumoi'];
		$sql_doimatkhau="select * from admin where username='$taikhoan' and password='$matkhaucu' limit 1";
		$query_doimatkhau=mysqli_query($conn,$sql_doimatkhau);
		$get_rows=mysqli_num_rows($query_doimatkhau);
		if($get_rows==0){
			echo 'Sai tài khoản hoặc mật khẩu | Làm ơn điền lại';
			}else{
				$sql_capnhat="update admin set password='$matkhaumoi'";
				$query_capnhat=mysqli_query($conn,$sql_capnhat);
				echo 'Bạn đã thay đổi mật khẩu thành công';
				}
	}
 ?>
<div align="center">
<form action="" method="post">
<table width="500" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">Đổi mật khẩu</div></td>
  </tr>
    <tr>
    <td>Tên tài khoản</td>
    <td><input type="text" name="tentaikhoan"></td>
  </tr>
  <tr>
    <td>Mật khẩu cũ</td>
    <td><input type="password" name="matkhaucu"></td>
  </tr>
  <tr>
    <td>Mật khẩu mới</td>
    <td><input type="password" name="matkhaumoi"></td>
  </tr>

  <tr>
    <td colspan="2" align="center"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
  </tr>
</table>
</form>
</div>