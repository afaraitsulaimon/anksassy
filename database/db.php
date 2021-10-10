<?php
  DEFINE("DBSERVER","localhost");
  DEFINE("DBUSER","root");
  DEFINE("DBNAME","anksassy");
  DEFINE("DBPASS","");

  //connect to the server

  $connection = mysqli_connect(DBSERVER,DBUSER,DBPASS);


  if (!$connection) {
      
    die("could not connect to the server" );
  }
  
    //connect to the database

    $db_connect = mysqli_select_db($connection,DBNAME);

    if (!$db_connect) {
        
        die("could not connect to the database" .mysqli_error($connection));
    }

?>