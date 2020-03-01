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
             
                
      