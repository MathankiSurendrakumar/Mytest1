<?php
  $books = array();
  $books [] = array(
  'title' => 'PHP ',
  'author' => 'mathanki',
  'publisher' => "IIT"
  );
  $books [] = array(
  'title' => 'JAVA',
  'author' => 'Jack Herrington',
  'publisher' => "USA"
  );
  
  $doc = new DOMDocument();
  $doc->formatOutput = true;
  
  $r = $doc->createElement( "books" );
  $doc->appendChild( $r );
  
  foreach( $books as $book )
  {
  $b = $doc->createElement( "book" );
  
  $author = $doc->createElement( "author" );
  $author->appendChild(
  $doc->createTextNode( $book['author'] )
  );
  $b->appendChild( $author );
  
  $title = $doc->createElement( "title" );
  $title->appendChild(
  $doc->createTextNode( $book['title'] )
  );
  $b->appendChild( $title );
  
  $publisher = $doc->createElement( "publisher" );
  $publisher->appendChild(
  $doc->createTextNode( $book['publisher'] )
  );
  $b->appendChild( $publisher );
  
  $r->appendChild( $b );
  }
  echo "save xml file";

  $doc->save("writeUsingDOMmathnki.xml");
  ?>

