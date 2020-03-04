<?php
	$sql_loaisp = "select * from loaisp";
	$query=mysqli_query ($conn,$sql_loaisp);
?>
 <div class="tieude">
            	<h3>Sản phẩm</h3>
            </div>
            <div class="danhsachsanpham">
            	<ul>
                <?php
                	while ($dong_sp=mysqli_fetch_array($query)){
				?>
                	<li><a href="index.php?xem=chitietloaisp&id=<?php echo $dong_sp['id_loaisp'] ?>"> <?php echo $dong_sp['tenloaisp'] ?></a></li><br>
                	<?php
					}
					?>
                </ul>
                </div>
             <div class="tieude">
            	<h3>Hàng bán chạy</h3>
            		</div> <br>
                    
                    <?php
					$sql_banchay=("select * from chitietsp order by id_sp desc limit 3");
					$query_banchay=mysqli_query($conn,$sql_banchay);
					
					?>
            	<ul class="hangbanchay" style="list-style:none; width:100%">	
                <?php
				while($dong_banchay=mysqli_fetch_array($query_banchay)){
				?>
                	<li><a href="?xem=chitietsp&idloaisp=<?php echo $dong_banchay['id_loaisp'] ?>&id=<?php echo $dong_banchay['id_sp'] ?>">
                    	<img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_banchay['hinhanh'] ?>" width="150" height="150" />
                    	<p><?php echo $dong_banchay['tensp'] ?></p>
                        <p style="color:red;"><?php echo number_format($dong_banchay['gia']).'.000'.'VNĐ' ?></p>
                    </a></li>
                    <?php
				}
					?>
                </ul>
                </div>
                
      