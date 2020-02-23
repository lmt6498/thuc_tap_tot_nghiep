<?php 
	$sql_all="select * from chitietsp";
	$query=mysqli_query($conn,$sql_all);
?>
        	<p style="text-align:center; color:#F00; background:#0CF; padding:10px;">Sản phẩm</p>
        	<div class="sanphamall">
            	<ul>
                <?php  
					while ($dong_all=mysqli_fetch_array($query))
					{
				 ?>
                	<li><a href="index.php?xem=chitietsp&id=<?php echo $dong_all['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100" height="100">
                    <p><?php echo $dong_all['tensp']; ?></p>
                    <p><?php echo $dong_all['gia'].'.000'.'VNĐ'; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				?>
                </ul> 
            
            </div>
       