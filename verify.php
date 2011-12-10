<?php
    include('global.php');
    
    include('show-db.php');
    
    mysql_select_db(DBNAME);

    $q = 'SHOW TABLES;';
    $res = mysql_query($q);
    if($res && mysql_num_rows($res)){
        echo "Tables in the database \"".DBNAME."\":\n";
        while($row = mysql_fetch_row($res))
            echo $row[0]."\n";
    }
    else echo "Could not show tables!";
    
    $q = 'SELECT * FROM '.TBNAME.';';
    $res = mysql_query($q);
    if($res && mysql_num_rows($res)){
        echo "TABLE ".TBNAME." has :\n";
        while($obj = mysql_fetch_object($res))
            echo $obj->a."\n";

    }
?>
