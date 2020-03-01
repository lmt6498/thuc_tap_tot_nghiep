<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}else{
		$page='';
	}
	if($page =='' || $page =='1'){
		$page1=0;
	}else{
		$page1=($page*10)-10;
	}
	$sql="select * from chitietsp,loaisp where loaisp.id_loaisp=chitietsp.id_loaisp order by chitietsp.id_sp desc limit $page1,10" ;
	$run=mysqli_query($conn,$sql);
 ?>
<table width="auto" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>ID</td>
    <td>Tên sp</td>
    <td>Hình ảnh</td>
    <td>Giá</td>
    <td>Loại sp</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=0;
  	while($dong=mysqli_fetch_array($run)){
   ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"></td>
    <td><?php echo $dong['gia']; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['thutusp']; ?></td>
    <td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp']?>">Sửa</a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
   }
   ?>
   <tr>
   <td colspan="8">Trang:
            <?php
            	$sql_trang="select * from chitietsp";
				$query_trang=mysqli_query($conn,$sql_trang);
				$count=mysqli_num_rows($query_trang);
				$a=ceil($count/10);
				for ($b=1;$b<=$a;$b++)
				{
					echo '<a href="index.php?quanly=quanlychitietsp&ac=them&page='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
				}
			?>
            <?php
			echo '<br>';
            	if($page >=1)
				echo 'Bạn đang ở trang: '.$page;
			?></td>
   </tr>
</table>

			