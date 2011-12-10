<?php
    include('global.php');

    $q = 'CREATE DATABASE '.DBNAME.';';
    query($q);
    include('show-db.php');
    
    mysql_select_db(DBNAME);
    $q = 'CREATE TABLE '.TBNAME.' (a INTEGER) ENGINE=InnoDB;';
    query($q);

    $q = 'INSERT INTO '.TBNAME.' VALUES(10),(11),(12),(13)';
    query($q);
    
    function query($q){
        mysql_query($q) or die('Failed: '.$q."\n");
        echo 'Success: '.$q."\n";
    }
    
    mysql_close($conn);
?>
