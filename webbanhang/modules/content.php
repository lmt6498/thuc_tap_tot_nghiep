<div class="content">
    	<div class="left">
			<?php
            	include('modules/left/list.php');
            ?>
        </div>
        <div class="right">
        	 <?php
             	if (isset($_GET['xem']))
				{
					$tam=$_GET['xem'];
				}
				else
				{
					$tam='';
				}
				if ($tam=='chitietloaisp')
				{
					include ('modules/right/chitietloaisp.php');
				}
				if ($tam=='allsp')
				{
					include ('modules/right/allsanpham.php');
				}
				elseif ($tam=='chitietsp')
				{
					include ('modules/right/chitietsp.php');
				}
				elseif ($tam=='dangky')
				{
					include ('modules/right/dangky.php');
				}
				elseif ($tam=='thongbao')
				{
					include ('modules/right/thongbao.php');
				}
				elseif ($tam=='dangnhap')
				{
					include ('modules/right/dangnhap.php');
				}
				elseif ($tam=='thanhtoan')
				{
					include ('modules/right/thanhtoan/thanhtoan.php');
				}
				elseif ($tam=='thongbaott')
				{
					include ('modules/right/thanhtoan/thongbaott.php');
				}
				elseif ($tam=='camon')
				{
					include ('modules/right/thanhtoan/camon.php');
				}
				elseif (isset($_POST['search']))
				{
					include ('modules/right/search.php');
				}
				elseif ($tam=='rtlogin')
				{
					include ('modules/right/dangnhap.php');
				}
			
				elseif ($tam=='giohang')
				{
					include ('modules/right/giohang.php');
				}
				else
					include ('modules/right/spmoi.php');
			 ?>
        </div>
		
    </div>
    <div class="clr"></div>