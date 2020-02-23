<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/ddad.css">
<title>Trang quản trị</title>
</head>

<body>
<?php 
	session_start();
	if (!isset($_SESSION['dangnhap']))
	{
		header ('location:login.php');
	}
?>
<div class="wrapper">
	<?php
		include('modules/connect.php');
    	include ('modules/header.php');
		include ('modules/menu.php');
		include ('modules/content.php');
		include ('modules/footer.php');
	?>
</div>


</body>
</html>