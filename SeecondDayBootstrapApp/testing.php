<?php


session_start();
include 'DatabaseConnection.php';

$userID=$_SESSION['id'];

$STH = $DBH->query("SELECT * from profile WHERE user_id='$userID' ");

$STH->setFetchMode(PDO::FETCH_ASSOC);

$row = $STH->fetchAll();

$xml = "<library>";
foreach($row as $r){
  $xml .= "<UserDetails>";
  $xml .= "<id>".$r['id']."</id>";  
  $xml .= "<FirstName>".$r['frstName']."</FirstName>";
  $xml .= "<LastName>".$r['lastName']."</LastName>";  
  $xml .= "<ContectNo>".$r['contectNo']."</ContectNo>";    
  $xml .= "</UserDetails>";  
}
$xml .= "</library>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("test.xml");


 
 

