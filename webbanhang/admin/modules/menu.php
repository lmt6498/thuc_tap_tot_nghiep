<?php
	if (isset($_GET['ac'])&&$_GET['logout'])
	{
		unset ($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	<li><a href="index.php">Trang chủ</a></li>
            <li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a></li>
            <li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sản phẩm</a></li>
            <li><a href="index.php?quanly=quanlychitietsp&ac=logout">Đăng xuất</a></li>
        </ul>
    </div>