<?php
  $host = 'localhost';
    $user = 'root';
    $pass = '';
    $data = 'nhom2CSDL';
$con=mysql_connect($host, $user, $pass) or die('canot connect to sever');
mysql_select_db($data, $con) or die('canot select database');
mysql_query("SET NAMES 'utf8'");
?>