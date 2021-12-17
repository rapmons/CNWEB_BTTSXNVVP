<?php
    $usern=$_REQUEST['username'];
    $passw=$_REQUEST['password']; 
    if($idnv=='' || $tennv==''){
        header("Location:login.php");
    }


    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    
    $sql = "SELECT * FROM admin where username='$usern' and password='$passw'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result)==0){
        header("Location:login.php");
    }else{
    header("Location:php.htm");
    
   
    }
?>