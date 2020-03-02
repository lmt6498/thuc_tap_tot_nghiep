<div class="content">
    	<?php 
			if(isset($_GET['quanly'])){
				$tam=$_GET['quanly'];
			}else{$tam='';}
			if($tam=='quanlyloaisp'){
				include('modules/quanlyloaisp/main.php');}
			if($tam=='quanlychitietsp'){
				include('modules/quanlychitietsp/main.php');}
			if($tam=='gallery'){
				include('modules/gallery/main.php');}
			if($tam=='doimatkhau'){
				include('doipass.php');}		
		?>
    <div class="clear"></div>