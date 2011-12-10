<?php
    $q = 'SHOW DATABASES;';
    $res = mysql_query($q);
    if($res && mysql_num_rows($res)){
        while($row = mysql_fetch_row($res))
            echo "DATABASES:\t".$row[0]."\n";
    }
    else echo "Could not show databases!";
?>
