<?php
function connect() {
        $con = mysql_connect('sql.franceserv.fr', 'zhxwcat', 'DJKLCR6L') or die('cannot connect to the database');
        mysql_query("SET NAMES 'utf8'");
        $db = mysql_select_db('zhxwcat-db2') or die('cannot select database');
    }
?>