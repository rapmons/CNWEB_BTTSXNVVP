<?php
    $idpb=$_REQUEST['IDPB'];
    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");

    $sql = "SELECT * FROM phongban where IDPB='$idpb'";
    $result = mysqli_query($link, $sql);
    
    $row = mysqli_fetch_array($result,MYSQLI_BOTH)  ;
 

    
?>
	<form action="xulycapnhat.php?IDPB=<?php echo $row['IDPB']; ?>" method="post">
		<table width="60%" boder="0">
			<caption> Login </caption>
				<tr>
					<td> Mã Phòng Ban </td>
					<td><input type="Text" size="20"  value = <?php echo $row['IDPB']; ?> disabled> </td>
				</tr>
				<tr>
					<td> Tên Phòng Ban </td>
					<td> <input type="Text" size="20" name="tenPB" value =<?php echo $row['TenPb']; ?> > </td>
				</tr>
                <tr>
					<td> Mô Tả </td>
					<td> <input type="Text" size="20" name="moTa" value =<?php echo $row['Mota']; ?> > </td>
				</tr>
				<tr>
					
					<td> <input type="submit" value="ok" > <input type="reset" value="Reset" > </td>
				</tr>
		
		</table>
	</form>
