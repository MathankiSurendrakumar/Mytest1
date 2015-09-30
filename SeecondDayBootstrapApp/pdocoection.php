<?php
session_start();

include 'DatabaseConnection.php';


$formUserName=$_POST['UN'];
$FoormPassword=$_POST['PW'];

# using the shortcut ->query() method here since there are no variable
# values in the select statement.
//$STH = $DBH->query("SELECT * from users WHERE username='$formUserName' AND password='$FoormPassword'");
$STH = $DBH->prepare("SELECT * from users WHERE username=:userN AND password=:UserP");
$STH->bindParam(':userN', $formUserName);
$STH->bindParam(':UserP', $FoormPassword);
$STH->execute();

# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_ASSOC);

while($row = $STH->fetch()) {
    $userid=$row['id'];
     $_SESSION['id']=$userid;
    $userName= $row['username'];
    $userPassword=$row['password'] . "\n";
    
}

$count = $STH->rowCount();

if($formUserName==""|| $FoormPassword=="" ){
  echo json_encode('0');
}

elseif($count<=0)
{
  echo json_encode('1');
}
else{
    echo json_encode('2');
   
}