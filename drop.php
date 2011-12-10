<?php
    include('global.php');
    
    mysql_query('DROP DATABASE '.DBNAME) or die('Could not drop database');
    
    include('show-db.php');
    mysql_close($conn);
?>
