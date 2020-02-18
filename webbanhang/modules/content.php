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
				elseif ($tam=='chitietsp')
				{
					include ('modules/right/chitietsp.php');
				}
				else
					include ('modules/right/allsanpham.php');
			
			 ?>
        </div>
		
    </div>
    <div class="clr"></div>