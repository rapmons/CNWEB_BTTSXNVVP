<?php
    $linh = mysqli_connect("localhost:3306","root","") or die ("khong the ket noi");
    mysqli_select_db($linh,"DULIEU");
    $sql ="select * from NhanVien";
    
    $result= mysqli_query($linh,$sql);
    echo '<form action="xuly_xoatatca.php" method="post">';
    echo ' <table border ="1" width="100%">';
    echo '<caption> du lieu truy cap Phong ban</caption>';
    echo '<TR><TH>IDNV</TH><TH>HO TEN</TH><TH>DIA CHI</TH><TH>CHON</TH></TR>';
    $i=0;
    while ($row= mysqli_fetch_array($result)) {
        $i=$i+1;
      echo "<TR><TD>$row[IDNV]</TD><TD>$row[Hoten]</TD><TD>$row[Diachi]</TD><TD><input type='checkbox' name='IDNV[]' value='$row[IDNV]'></TD></TR>";
    }
    
    echo '</table>';
    echo'<input type="submit" value="xoa tat ca" >';
    echo'</form>';
    mysqli_free_result($result);
    mysqli_close($linh);
     ?>