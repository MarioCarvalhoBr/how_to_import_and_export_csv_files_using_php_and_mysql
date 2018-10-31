<?php
function getdb(){
$servername = "localhost";
$username = "root";
$password = "1234";
$db = "export_csv";

try {
   
    $conn = mysqli_connect($servername, $username, $password, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
?>