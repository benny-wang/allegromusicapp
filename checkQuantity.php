<?php

// connect with the database
include_once("MYSQL_Connect.php");

$upc=$_GET["upc"];
$quantity=$_GET["quantity"];

//get all items from the database
$add = mysql_query("SELECT * FROM item WHERE upc = '".$upc."'");


// item is of one item or tuple in the item table
while ($item = mysql_fetch_array($add))
{
  if ($item["stock"] < $quantity){
	echo "false";
  }
  else{ 
    echo "true";
  }
 }

mysql_close();

?>