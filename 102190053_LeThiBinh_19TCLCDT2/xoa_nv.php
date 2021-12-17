<?php
    $linh = mysqli_connect("localhost:3306","root","") or die ("khong the ket noi");
    mysqli_select_db($linh,"DULIEU");
    $sql ="select * from NhanVien";
    
    $result= mysqli_query($linh,$sql);
    echo ' <table border ="1" width="100%">';
    echo '<caption> du lieu truy cap Phong ban</caption>';
    echo '<TR><TH>IDNV</TH><TH>HO TEN</TH><TH>DIA CHI</TH><TH>XOA</TH></TR>';
    while ($row= mysqli_fetch_array($result)) {
      echo "<TR><TD>$row[IDNV]</TD><TD>$row[Hoten]</TD><TD>$row[Diachi]</TD><TD><a href='xulyxoa.php?IDNV=".$row['IDNV']."' name='link' value='$row[IDNV]'  >xoa</a></TD></TR>";
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($linh);
     ?>