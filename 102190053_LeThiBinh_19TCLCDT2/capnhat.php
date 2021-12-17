<?php
    $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    $sql = "SELECT * FROM phongban";
    $result = mysqli_query($link, $sql);
    echo "<table border='1' width = '100%'>" ;
    echo "<caption> Du lieu </caption>" ;
    echo "<tr>
    <th> Ma Phong Ban</th>
    <th> Ten</th>
    <th> Mo ta</th>
    <th> Cap nhat</th>    
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
    echo
    "<tr>
    <th> $row[IDPB]</th>
    <th> $row[TenPb]</th>
    <th> $row[Mota]</th>
    <th> <a href='form_capnhat.php?IDPB=".$row['IDPB']."' name='link' value='$row[IDPB]'>xxx</a> </th>    
    </tr>";
    }
    echo "</table>";
    mysqli_free_result($result);
    mysqli_close($link);
    ?>