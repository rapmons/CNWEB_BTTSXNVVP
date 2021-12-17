<?php
$idnv=$_REQUEST['IDNV'];
   
$link = mysqli_connect("localhost", "root", "");
if (!$link) {   // Check connection 
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($link,"dulieu");
foreach($idnv as $id)
{
$sql = "DELETE FROM nhanvien where IDNV='$id'";
$result = mysqli_query($link, $sql);
}
header("Location:xoatatca.php");
?>