<?php
	$sql="select * from chitietsp where id_sp='$_GET[id]'";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run); 
?>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">Sửa chi tiết sản phẩm</div></td>
  </tr>
  <tr>
    <td>Tên sp</td>
    <td><input type="text" name="tensp" value="<?php echo $dong['tensp']?>"></td>
  </tr>
  <tr>
    <td>Giá sp</td>
    <td><input type="text" name="gia" value="<?php echo $dong['gia']?>"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']?>" width="60" height="60"/></td>
  </tr>
  <tr>
    <td>Mô tả sp</td>
    <td><textarea name="motasp" cols="40" rows="15" ><?php echo $dong['mota']?>"</textarea></td>
  </tr>
  <?php
  	$sql_loaisp="select * from loaisp";
	$run_loaisp=mysqli_query($conn,$sql_loaisp);
   ?>
  <tr>
    <td>Loại sp</td>
    <td><select name="loaisp">
    <?php while($dong_loaisp=mysqli_fetch_array($run_loaisp))
	{
		if($dong['id_loaisp']==$dong_loaisp['id_loaisp']){
		?>
    		<option selected="selected" value="<?php echo $dong_loaisp['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
          <?php
	}else{
		  ?>
          <option value="<?php echo $dong_loaisp ['id_loaisp'] ?>"><?php echo $dong_loaisp['tenloaisp'] ?></option>
          <?php
	}
	}
		  ?>  
    </select></td>
  </tr>
  <tr>
    <td height="27">Thứ tự</td>
    <td><input type="text" name="thutusp" value="<?php echo $dong['thutusp']?>"></td>
    <tr>
  	<td>Nổi bật</td>
    <td> <select name="noibat">
    		<option>Yes</option>
       		 <option>No</option>
    </select> </td>
  </tr>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="sua" value="sua">Sửa</button>
    </div></td>
  </tr>
</table>
</form>