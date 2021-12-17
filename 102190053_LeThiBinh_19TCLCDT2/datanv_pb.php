<?php
    $idnv=$_REQUEST['IDPB'];



    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"DULIEU");
    
    $sql = "SELECT * FROM NhanVien where IDPB='$idnv'";
    $result = mysqli_query($link, $sql);
    echo "<table border='1' width = '100%'>" ;
    echo "<caption> Du lieu </caption>" ;
    echo "<tr>
    <th> Ma So</th>
    <th> Ten</th>
    <th> ma phong ban</th>
    <th> dia chi</th>    
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
    echo
    "<tr>
    <th> $row[IDNV]</th>
    <th> $row[Hoten]</th>
    <th> $row[IDPB]</th>
    <th> $row[Diachi]</th>    
    </tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($link);
?>