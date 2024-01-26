<?php  
$serverName="projecti.database.windows.net";
$database="test";
$username="Samriddha_Upreti";
$password= "Tushar@9865508233";
$conn=new mysqli($serverName, $username, $password, $database);
if ($conn->connect_error) {
   die("Connection Failed ". $conn->connect_error);

}
else {echo "Connected sucessfully";}

?>