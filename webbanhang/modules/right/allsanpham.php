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
	$sql_all="select * from chitietsp limit $page1,10";
	$query=mysqli_query($conn,$sql_all);
?>
        	 <div class="tieude">
            	<h3>Tất cả sản phẩm</h3>
            </div>
        	<div class="sanphamall">
            	<ul>
                <?php  
					while ($dong_all=mysqli_fetch_array($query))
					{
				 ?>
                	<li><a href="index.php?xem=chitietsp&idloaisp=<?php echo $dong_all['id_loaisp'];?>&id=<?php echo $dong_all['id_sp']; ?>">
                    <img src="admin/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?>" width="100" height="100">
                    <p style="color:skyblue"><?php echo $dong_all['tensp']; ?></p>
                    <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;"> <?php echo number_format($dong_all['gia']).'.000'.'VNĐ'; ?></p>
                	<p style="color:#F00; text-align:center">Chi tiết sản phẩm</p>
                </a></li>
                <?php
						}
				?>
                </ul> 
            
            </div>
            
            <p style="clear:both"></p>
            Trang:
            <?php
            	$sql_trang="select * from chitietsp";
				$query_trang=mysqli_query($conn,$sql_trang);
				$count=mysqli_num_rows($query_trang);
				$a=ceil($count/10);
				for ($b=1;$b<=$a;$b++)
				{
					echo '<a href="?page='.$b.'" style="text-decoration:none">'.' '.$b.' '.'</a>';
				}
			?>
            <?php
			echo '<br>';
            	if($page >=1)
				echo 'Bạn đang ở trang: '.$page;
			?>
       