<?php
	session_start();
	if (isset($_POST['dangnhap']))
	{
		$email=$_POST['email'];
		$pass=$_POST['mk'];
		$sql_dangnhap= "select * from dangky where email='$tentk' and matkhau='$pass' limit 1";
		$query_dangnhap=mysqli_query($conn,$sql_dangnhap);
		$count_dangnhap=mysqli_num_rows($query_dangnhap);
		if ($count_dangnhap==0)
		{
			echo '<script>arlert("Sai email hoặc mật khẩu!!!!")</script>';
		}else
		{
			$_SESSION['dangnhap']=$email;
			header ('location:index.php?xem=giohang');
		}
	}
?>
<form method="post" action="" enctype="multipart/form-data">
<table width="auto" border="1">
  <tr>
    <td colspan="2" align="center">Đăng nhập khách hàng</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <td>Mật khẩu:</td>
    <td><input type="password" name="mk" size="30"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
  </tr>
</table>
</form>
