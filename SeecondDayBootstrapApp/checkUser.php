<?php

include("dbConnection.php");


$formUserName=$_POST['UserName'];
$FoormPassword=$_POST['password'];


$result = mysql_query("SELECT * FROM users Where username'$formUserName'");
while ($row = mysql_fetch_array($result)) {
    $userName=$row['username'];
   $userPassword=$row['password']; 
}

if($formUserName!= $userName && $FoormPassword!=$userPassword)
{
  echo "Invalied user " ; 
}
else{
    header("Location: http://localhost/FirstDayProject/Congratulations.php");
}