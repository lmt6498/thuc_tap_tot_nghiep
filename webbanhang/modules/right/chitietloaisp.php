<?php 
	$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>
<?php 
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_loaisp=mysqli_query($conn,$sql_loaisp);
	$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>
	<p style="text-align:center; color:#F00; background:#0CF; padding:10px;"><?php echo $dong_loaisp['tenloaisp']; ?></p>
    
        	<div class="sanphamall">
            	<ul>
                	<?php
                    	while ($dong_chitiet=mysqli_fetch_array($query)){
					?>
                	<li><a href="index.php?xem=chitietsp&id=<?php echo $dong_chitiet['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="100" height="100">
                    <p><?php echo $dong_chitiet['tensp']; ?></p>
                    <p><?php echo $dong_chitiet['gia'].'.000'.'VNĐ'; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				?>
                </ul> 
            
            </div>
       