<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
<table width="auto" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết sản phẩm</div></td>
  </tr>
  <tr>
    <td>Tên sp</td>
    <td><input type="text" name="tensp"></td>
  </tr>
  <tr>
    <td>Giá sp</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Mô tả sp</td>
    <td><textarea name="motasp" cols="40" rows="15"></textarea></td>
  </tr>
  <?php
  	$sql="select * from loaisp";
	$run=mysqli_query($conn,$sql);
   ?>
  <tr>
    <td>Loại sp</td>
     <td><select name="loaisp">
     	 <?php 
		 while ($dong=mysqli_fetch_array($run))
		 {
		?>
    		<option value="<?php echo $dong ['id_loaisp'] ?>"><?php echo $dong['tenloaisp']?> </option>
          <?php
	}
		  ?>
    </select></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutusp"></td>
  </tr>
  <tr>
  	<td>Nổi bật</td>
    <td> <select name="noibat">
    		<option>Yes</option>
       		 <option>No</option>
    </select> </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm">Thêm</button>
    </div></td>
  </tr>
</table>
</form>