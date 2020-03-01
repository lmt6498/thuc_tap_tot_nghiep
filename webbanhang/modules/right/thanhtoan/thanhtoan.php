<?php 
 session_start();
?>
<div class="tieude">
<h1> Trang thanh toán:</h1>
</div>
<h3 style="float:right">
<form method="post" enctype="multipart/form-data" action="">
<?php 
	if(isset($_SESSION['dangnhap']))
	{
		echo 'Xin chào:'.$_SESSION['dangnhap'];
	}
	if (!isset ($_SESSION['dangnhap']))
	{
		header ('location:index.php?xem=thongbaott');
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
					echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr bgcolor="#00FF33";>';
			echo'<td width="100px">Tên SP</td>';
			echo'<td width="100px">Hình ảnh SP</td>';
			echo'<td width="100px">Giá sp</td>';
			echo'<td width="30px">SL</td>';
			echo'<td width="100px">Tổng tiền</td>';
			echo'<td colspan="3" width="auto">Quản lý</td>';
			echo'</tr>';
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
			
					echo '</table>';
				}
			}
			}
	}
	
		echo '<h3 style="color:red"> Tổng tiền thanh toán='.$thanhtien.'.000'.'vnđ'.'</h3>';
?>
	<input type="submit" name="thanhtoan" value="Xác nhận đặt hàng" style="margin-left:50%;width:200px;height:40px;background:#F00;color:#FFF;font-size:18px;border-radius:8px;" />
    <?php
    	if (isset ($_POST['thanhtoan']))
		{
			
			session_destroy();
			header ('location:index.php?xem=camon');
		}
	?>
</form>

