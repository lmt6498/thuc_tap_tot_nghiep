<?php
	include('../connect.php');
	$id=$_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		$sql="insert into loaisp (tenloaisp,thutu) value('$tenloaisp','$thutu')";
		$thucthi=mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
		}
		elseif(isset($_POST['sua'])){
			$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
			$thucthi2=mysqli_query($conn,$sql);
			header('location:../../index.php?quanly=quanlyloaisp&ac=sưa&id#'.$id);
			}else{
				$sql="delete from loaisp where id_loaisp=$id";
				$thucthi3=mysqli_query($conn,$sql);
				header('location:../../index.php?quanly=quanlyloaisp&ac=them#');
				}
		
?>