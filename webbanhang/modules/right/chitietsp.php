<?php
	$sql_chitietsp="select * from chitietsp where id_sp=$_GET[id]";
	$query=mysqli_query($conn,$sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query);
?>
<div class="tieude">
	<h3>Chi tiết sản phẩm</h3>
</div>
<br>
<table width="auto" border="1" style="border-collapse:collapse">
  <tr>
    <td colspan="2" align="center">Chi tiết sản phẩm</td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="200" height="200"></td>
    <td>Tên SP: <?php echo $dong_chitietsp['tensp']; ?></td>
  </tr>
  <tr>
    <td>Giá SP: <?php echo $dong_chitietsp['gia'].'.000'.'VNĐ'; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center">Thông tin sản phẩm:</td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['mota']; ?></td>
  </tr>
  <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp'];?>"><img src="images/buy1.gif" height="200" width="200" style="float:right"></a>
</table>
<br>
<?php
	$sql_spcungloai="select * from chitietsp where id_loaisp='$_GET[idloaisp]' and chitietsp.id_sp <> $_GET[id]";
	$query_spcungloai=mysqli_query($conn,$sql_spcungloai);
?>
<div class="tieude">
	<h3>Sản phẩm cùng loại</h3>
</div>
        	<div class="sanphamall">
            	<ul>
                <?php  
					while ($dong_spcungloai=mysqli_fetch_array($query_spcungloai))
					{
				 ?>
                	<li><a href="index.php?xem=chitietsp&id=<?php echo $dong_spcungloai['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_spcungloai['hinhanh'] ?>" width="100" height="100">
                    <p><?php echo $dong_spcungloai['tensp']; ?></p>
                    <p><?php echo $dong_spcungloai['gia'].'.000'.'VNĐ'; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				?>
                </ul> 
            
            </div>
            
