<?php
$dbHost="localhost";
$dbUser="root";
$dbPassword="";
$dbName="user";


try{  
    $pdoConn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);   
    $pdoConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    Echo "Successfully connected with to  database";  
} catch(PDOException $e){  
    echo "Connection failed: " . $e->getMessage();
    die();
}  



/*$conn =mysqli_connect($hostName,$dbUser,$dbPassword,$dbName); //it can rtn true or false
if(!$conn){
  die("something went wrong"); //do and terminate 
}*/
?>