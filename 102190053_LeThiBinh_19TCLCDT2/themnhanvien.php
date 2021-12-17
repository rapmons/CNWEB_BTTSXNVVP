
	<form action="xulycapnhatnhanvien.php?" method="post">
		<table width="60%" boder="0">
			<caption> Thêm Nhân Viên </caption>
				<tr>
					<td> ID nhân viên </td>
					<td><input type="Text" size="20"  name="IDNV" > </td>
				</tr>
				<tr>
					<td> Tên nhân viên </td>
					<td> <input type="Text" size="20" name="hoten"  > </td>
				</tr>
                <tr>
					<td> Phong ban </td>
					<td> <select name="select1" id="">
					<?php 
					 $link = mysqli_connect("localhost", "root", "");
					 if (!$link) {   // Check connection 
						 die("Connection failed: " . mysqli_connect_error());
					 }
					 mysqli_select_db($link,"dulieu");
				 
					 $sql = "SELECT * FROM phongban";
					 
					 $result = mysqli_query($link, $sql);
					 
					
					while ($row= mysqli_fetch_array($result)) {
      
	                 echo" <option value=\"$row[IDPB]\" >$row[IDPB]</option>";
	 
					}
                       ?>
                      </select> </td>
				</tr>
				<tr>
					<td> Dịa chỉ </td>
					<td> <input type="Text" size="20" name="Diachi"  > </td>
				</tr>
				<tr>
					
					<td> <input type="submit" value="ok" > <input type="reset" value="Reset" > </td>
				</tr>
		
		</table>
	</form>
