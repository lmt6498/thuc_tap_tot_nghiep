<?php
	if (isset($_POST['dangky']))
	{
		$tenkhachhang=$_POST['tenkh'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky="insert into dangky (tenkhachhang,matkhau,email,diachi,sdt) value ('$tenkhachhang','$pass','$email','$diachi','$dienthoai')";
		$query_dangky=mysqli_query($conn,$sql_dangky);
		if ($query_dangky)
		{
			header ('location:index.php?xem=thongbao');
		}
		else
		{
			header ('location:index.php?xem=dangky');
		}
	}
?>
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table width="auto" border="1">
  <tr>
    <td colspan="2" align="center">Đăng ký khách hàng</td>
  </tr>
  <tr>
    <td>Tên khách hàng:</td>
    <td><input type="text" name="tenkh" size="30"></td>
  </tr>
  <tr>
    <td>Mật khẩu:</td>
    <td><input type="password" name="pass" size="30"></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="email" size="30"></td>
  </tr>
  <tr>
    <td>Địa chỉ:</td>
    <td><input type="text" name="diachi" size="30"></td>
  </tr>
  <tr>
    <td>Điện thoại</td>
    <td><input type="number" name="dienthoai" size="30"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="dangky" value="Đăng ký"></td>
  </tr>
</table>
