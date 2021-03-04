<?php function OpenCon()
  {
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "1234";
  $db = "promotion";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
  
  return $conn;
  }
  function CloseCon($conn)
  {
  $conn -> close();
  }
  
  $conn = OpenCon();
  if($conn === false){
     die("ERROR: Could not connect. " . $conn->connect_error);
  }
 else
  echo " "; ?>