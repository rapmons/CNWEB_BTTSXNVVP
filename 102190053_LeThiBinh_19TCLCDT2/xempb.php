<?php
    $linh = mysqli_connect("localhost:3306","root","") or die ("khong the ket noi");
    mysqli_select_db($linh,"DULIEU");
    $sql ="select * from PhongBan";
    
    $result= mysqli_query($linh,$sql);
    echo ' <table border ="1" width="100%">';
    echo '<caption> du lieu truy cap Phong ban</caption>';
    echo '<TR><TH>IDPB</TH><TH>TEN PB</TH><TH>MOTA</TH><TH>XEM NHAN VIEN</TH></TR>';
    while ($row= mysqli_fetch_array($result)) {
      echo "<TR><TD>$row[IDPB]</TD><TD>$row[TenPb]</TD><TD>$row[Mota]</TD><TD><a href='datanv_pb.php?IDPB=".$row['IDPB']."' name='link' value='$row[IDPB]'  >xxx</a></TD></TR>";
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($linh);
     ?>