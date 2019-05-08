<?php
/**
*connection class
*/
NameSpace App\DB;
//include __DIR__."/Libs/dbconnect.php";
class dbConnect
{

  function __construct()
  {
  global $db;
  if (!$db)
  {
    throw new Exception("Error connecting Processing Request", 1);

  }
  if ($db)
  {
    
    echo "Connected!";

  }


  }
}
