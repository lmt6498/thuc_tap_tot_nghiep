<?php 
	if (isset($_POST['search']))
	{
		$search=$_POST['searchtext'];
		$sql_search="select * from chitietsp where tensp LIKE '%$search%'";
		$query_search=mysqli_query($conn,$sql_search);
	}
?>
	<p style="text-align:center; color:#F00; background:#0CF; padding:10px;">Sản phẩm tìm thấy</p>
    
        	<div class="sanphamall">
            <?php
            	if ($count=mysqli_num_rows($query_search)==0)
				{?>
                <p>Không tìm thấy sản phẩm nào</p>
			<?php		
				}else {
			?>
            	<ul>
                	<?php
                    	while ($dong_search=mysqli_fetch_array($query_search)){
					?>
                	<li><a href="index.php?xem=chitietsp&id=<?php echo $dong_search['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh'] ?>" width="100" height="100">
                    <p><?php echo $dong_search['tensp']; ?></p>
                    <p><?php echo $dong_search['gia'].'.000'.'VNĐ'; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				}
				?>
                </ul> 
            
            </div>
       