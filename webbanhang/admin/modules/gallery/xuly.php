<?php
	include ('../connect.php');
	if (isset($_POST['upload']))
	{
		$id=$_GET['id'];
		foreach ($_FILES['file']['name'] as $i => $name)
		{
			$name=$_FILES['file']['name'][$i];
			$type=$_FILES['file']['type'][$i];
			$size=$_FILES['file']['size'][$i];
			$tmp=$_FILES['file']['tmp_name'][$i];
			$explode= explode('.',$name);
			$ext = end($explode);
			$path='uploads/';
			$path= $path . basename($explode[0].time().'.'.$ext);
			$hinhanhsp=basename($explode[0].time().'.'.$ext);
			$thongbao = array();
		
		if	(empty($tmp))
		{
			echo $thongbao[]= 'Làm ơn chọn ít nhất 1 ảnh';
		}else
		{
			$chophep= array('jpeg','jpg','png','gif','bmp');
			$max_size= 4100000;
			if (in_array($ext,$chophep)=== false)
			{
				echo $thongbao[]='File <strong>'.$name.'<strong>không hợp lệ!!! <br>';
			}
			if($size > $max_size)
			{
				echo $thongbao[]='File <strong>'.$name.'<strong> quá lớn <br>';
			}
			if (empty ($thongbao))
			{
				if (file_exists('uploads'))
				{
					mkdir ('uploads',0777);	
				}
				if (move_uploaded_file($tmp,$path))
				{
					$sql_upload="insert into gallery (id_sp,hinhanhsp) value('$id','$hinhanhsp')";
					$query_upload=mysqli_query($conn,$sql_upload);
					header('location: ../../index.php?quanly=gallery&ac=them&id='.$id);
				}else
				{
					echo 'UPLOAD <strong>'.$name.'<strong>	 thất bại <br>';
				}
			}
		}
		foreach($thongbao as $thongbao)
		{
			echo  $thongbao;
		}
		}
	}
?>