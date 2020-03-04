<?php
	$sql_moinhat="select * from chitietsp order by id_sp desc limit 0,6";
	$row_moinhat=mysqli_query($conn,$sql_moinhat);
	
?>
	<div class="tieude">
   <h3> Sản phẩm mới nhất</h3>
    </div>
    <div class="sanphamall">
                	<ul>
                    <?php
					while($dong_moinhat=mysqli_fetch_array($row_moinhat)){
					?>
                    	<li><a href="index.php?xem=chitietsp&idloaisp=<?php echo $dong_moinhat['id_loaisp'];?>&id=<?php echo $dong_moinhat['id_sp']; ?>">
                        	<img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="150" />
                            <p style="color:skyblue"><?php echo $dong_moinhat['tensp'] ?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['gia']).'.000'.'VNĐ'?></p>
                            
                        	
                        </a></li>
                      <?php
					}
					  ?>
                    </ul>
                    </div>
                 <div class="clr"></div>
                 
				 <?php
	$sql_moinhat="select * from chitietsp where noibat='Yes' limit 0,9";
	$row_moinhat=mysqli_query($conn,$sql_moinhat);
	
?>
	<div class="tieude">
   <h3> Sản phẩm nổi bật</h3>
    </div>
    <div class="sanphamall">
                	<ul>
                    <?php
					while($dong_moinhat=mysqli_fetch_array($row_moinhat)){
					?>
                    	<li><a href="?quanly=chitietloaisp&idloaisp=<?php echo $dong_moinhat['id_loaisp'] ?>&id=<?php echo $dong_moinhat['id_sp'] ?>">
                        	<img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="150" />
                            <p style="color:skyblue"><?php echo $dong_moinhat['tensp'] ?></p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['gia']).' '.'VNĐ'?></p>
                            
                        	
                        </a></li>
                      <?php
					}
					  ?>
                    </ul>
                    </div>
                    
                 <div class="clr"></div>
                 