<?php session_start();
//session_destroy();
 ?>
 <div class="tieude">
<h1>Giỏ hàng</h1> 
</div>
<h3 style="float:right">
<?php 
	if(isset($_SESSION['dangnhap']))
	{
		echo 'Xin chào:'.$_SESSION['dangnhap'];
	}
?>
</h3>
<?php

	if (isset($_GET['add'])&&!empty($_GET['add']))
	{
		$id=$_GET['add'];
		$_SESSION['cart_'.$id]+=1;	
		header ('location:index.php?xem=giohang');
	}
	if (isset($_GET['them']))
	{
		$_SESSION['cart_'.$_GET['them']]+=1;
		header ('location:index.php?xem=giohang');
	}
	if (isset($_GET['tru']))
	{
		$_SESSION['cart_'.$_GET['tru']]-=1;
		header ('location:index.php?xem=giohang');
	}
	if (isset($_GET['xoa']))
	{
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header ('location:index.php?xem=giohang');
	}
	$thanhtien=0;
	echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
		echo'  <tr bgcolor="#00FF33";>';
			echo'<td width="100px">Tên SP</td>';
			echo'<td width="100px">Hình ảnh</td>';
			echo'<td width="100px">Giá sp</td>';
			echo'<td width="30px">SL</td>';
			echo'<td width="100px">Tổng tiền</td>';
			echo'<td colspan="3" width="auto">Quản lý</td>';
			echo'</tr>';
	foreach ($_SESSION as $name => $value)
	{
		if ($value>0)
		{
			
			if(substr($name,0,5)=='cart_')
			{
				
				
				$id=substr($name,5,strlen((int)$name-5));
				$sql="select * from chitietsp where id_sp='".$id."'";
				$query=mysqli_query($conn,$sql);
				while ($dong=mysqli_fetch_array($query))
				{
					
					$tongtien=$dong['gia']*$value;
					$thanhtien+=$tongtien;
				
			
		
			echo'  <tr bgcolor="#FFFF00">';
			echo '<td>'; echo $dong['tensp']; echo '</td>';
			echo '<td>'; echo '<img src="admin/modules/quanlychitietsp/uploads/'.$dong['hinhanh'].'"'.'width="100"'.' height="100"'.'>'; echo '</td>';
			echo '<td>'; echo $dong['gia'].'.000'; echo '</td>';
			echo '<td>'; echo $value; echo '</td>';
			echo '<td>'; echo $tongtien.'.000'; echo '</td>';
			echo '<td width="auto">'; echo'<a href="index.php?xem=giohang&them='.$id.'">Thêm SLSP</a>'; echo '</td>';
			echo '<td width="auto">'; echo '<a href="index.php?xem=giohang&tru='.$id.'">Giảm SLSP</a>'; echo '</td>';
			echo '<td width="auto">'; echo '<a href="index.php?xem=giohang&xoa='.$id.'">Xóa SP</a>'; echo '</td>';
			echo'</tr>';
			
					
				}
			}
			}
	}
	echo '</table>';
	if ($thanhtien==0)
	{
		echo "Giỏ hàng trống!!";
		echo '<p><a href="index.php">Click vào đây để quay lại trang mua hàng!!</a></p>';
	}else
	{
		echo '<a href="index.php?xem=thanhtoan"><img style="float:right" src="images/dat-hang-ngay-button.gif" width="100" height="50"></a>';
		echo '<h3 style="color:red"> Tổng tiền thanh toán='.$thanhtien.'.000'.'vnđ'.'</h3>';
		echo '<p><a href="index.php">Tiếp tục mua hàng</a></p>';
	}
?>
