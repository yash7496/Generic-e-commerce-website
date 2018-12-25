<?php

    require("seit.php");
    $select= "select * from emp";
    $rs=mysql_query($select);

                while($row=mysql_fetch_array($rs))
                {

                echo "<table border=4>";
                   echo "<tr>";


       echo "<td>".$row['sname']."</td>";
    echo "<td>".$row['saddress']."</td>";
     echo"<td>".$row['sid']."</td>";



            echo "</tr>";
             echo "</table>";
             }
?>





