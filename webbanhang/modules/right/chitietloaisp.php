<?php
	$sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>
<?php 
	$sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
	$query_loaisp=mysqli_query($conn,$sql_loaisp);
	$dong_loaisp=mysqli_fetch_array($query_loaisp);
?>	
<div class="tieude">
	<h3><?php echo $dong_loaisp['tenloaisp']; ?></h3>
    </div>
        	<div class="sanphamall">
            	<ul>
                	<?php
                    	while ($dong_chitiet=mysqli_fetch_array($query)){
					?>
                	<li><a href="index.php?xem=chitietsp&idloaisp=<?php echo $dong_chitiet['id_loaisp'];?>&id=<?php echo $dong_chitiet['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="100" height="100">
                     <p style="color:skyblue"><?php echo $dong_chitiet['tensp']; ?></p>
                    <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_chitiet['gia']).'.000'.'VNĐ'	; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				?>
                </ul> 
            
            </div>
           <div class="clr"></div>