<?php
    $idpb=$_REQUEST['IDPB'];
    $tenPB=$_REQUEST['tenPB'];
    $mota=$_REQUEST['moTa'];



    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    
    $sql = "UPDATE phongban SET TenPB='$tenPB', mota = '$mota'  where IDPB='$idpb'";
    $result = mysqli_query($link, $sql);
    header("Location:capnhat.php");

    mysqli_free_result($result);
    mysqli_close($link);
?>