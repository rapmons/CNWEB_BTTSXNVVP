<?php
    $idpb=$_REQUEST['IDNV'];
    $tenPB=$_REQUEST['hoten'];
    $mota=$_REQUEST['select1'];
    $mota1=$_REQUEST['Diachi'];



    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    
    $sql = " INSERT INTO nhanvien  VALUES ('$idpb', '$tenPB', '$mota', '$mota1');";
    $result = mysqli_query($link, $sql);
    header("Location:xemthongtin.php");

    mysqli_free_result($result);
    mysqli_close($link);
?>