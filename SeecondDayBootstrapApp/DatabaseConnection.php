<?php


  try {
  # MS SQL Server and Sybase with PDO_DBLIB
        $host = "mysql.kbtpl.com";
        $user="kbtdbusertest";
        $pass="kfP3ryzg";
        $dbname="kbtdbtest_v1";
 
  # MySQL with PDO_MYSQL
  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}
catch(PDOException $e) {
    echo $e->getMessage();
}