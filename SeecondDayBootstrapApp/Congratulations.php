<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'DatabaseConnection.php';

echo "sucessfully login";
echo "can check user detils in xml file in same directory";

$userID=$_SESSION['id'];

$STH = $DBH->query("SELECT * from profile WHERE user_id='$userID' ");

$STH->setFetchMode(PDO::FETCH_ASSOC);

$row = $STH->fetchAll();


$xml = "<library>";
//foreach($row as $r){
//  $xml .= "<UserDetails>";
//  $xml .= "<id>".$r['id']."</id>";  
//  $xml .= "<FirstName>".$r['firstName']."</FirstName>";
//  $xml .= "<LastName>".$r['lastName']."</LastName>";  
//  $xml .= "<ContectNo>".$r['contectNo']."</ContectNo>";    
//  $xml .= "</UserDetails>";  
//}

$xml .= "<UserDetails>";
  $xml .= "<id>.2012038.</id>";  
  $xml .= "<FirstName>".mathanki."</FirstName>";
  $xml .= "<LastName>".Surendrkumar."</LastName>";  
  $xml .= "<ContectNo>.1234567899.</ContectNo>";    
  $xml .= "</UserDetails>";
$xml .= "</library>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("mathanki.xml");


?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Success page</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        
           
        
        <br/><br/>
   <table class="table table-bordered" style="width:50%" >
       <caption>User Details</caption>
       
        <tr>
              <?php foreach ($row as $row1){ ?>
            <th class="success">First Name</th>
            <td class="success"><?php echo $row1['firstName'];  ?></td>
       </tr>
       
       <tr>
            <th class="info">Last Name</th>
            <td class="info"><?php echo $row1['lastName']; ?></td>
       </tr>
        <tr>
            <th class="warning">Contact No</th>
            <td class="warning"><?php echo $row1['contectNo'];  ?></td>
       </tr>
        <?php } ?>
 
  </tr>
  
     </table>
        

  
       
        
    </body>
</html>



