<?php
include('modules/connect.php');
	session_start();
	//session_destroy();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from admin where username='$username' and password='$password'";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhap']=$username;
			header('location:index.php');
		}else{
			header('location:login.php');
		}
	}
	?>
<form action="" method="post">
<center><table width="200" border="1">
  <tr>
    <td colspan="2" align="center">Đăng Nhập</td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="20"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="login" id="button" value="Login"> </td>
  </tr>
</table></center></form>
