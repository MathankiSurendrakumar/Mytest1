<?php
 
  $doc = new DOMDocument();
  $doc->load( 'mathanki.xml' );
  
  $userD = $doc->getElementsByTagName( "UserDetails" );
  foreach( $userD as $userDet )
  {
  $id = $userDet->getElementsByTagName( "id" );
  $getid = $id->item(0)->nodeValue;
  
  $FN = $userDet->getElementsByTagName( "FirstName" );
  $FName = $FN->item(0)->nodeValue;
  
  $LN = $userDet->getElementsByTagName( "LastName" );
  $LName = $LN->item(0)->nodeValue;
  
  $CN = $userDet->getElementsByTagName( "ContectNo" );
  $CNumber = $CN->item(0)->nodeValue;
  
  echo "$getid - $FName - $LName - $CNumber\n";
  }
 
