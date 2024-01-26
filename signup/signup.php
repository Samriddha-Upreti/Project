<?php
error_reporting(E_ALL);
ini_set("error",1);
session_start();
include ("../database/connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $newUsername=$_POST["new_username"];
    $newPassword=$_POST["new_password"];
   try{
    $stmt=$conn->prepare("SELECT * FROM UserTable WHERE UserName=:username");
    $stmt->bindparam(":username", $newUsername);
    $stmt->execute();
    $existingUser=$stmt->fetch(PDO::FETCH_ASSOC);
    if($existingUser)
    {echo"Username already taken. Please choose a different one.";
   }
   else{$hashedPassword=password_hash($newPassword,PASSWORD_DEFAULT);
    $stmt=$conn->prepare("INSERT INTO UserTable(UserName,Password) VALUES(:username,:password)");
    $stmt->bindParam(":username", $newUsername);
    $stmt->bindparam(":password", $hashedPassword);
    $stmt->execute();
    echo"Signup Sucessful. Welcome, $newUsername";
   }

}catch(PDOException $e) {die("Error". $e->getMessage());}

}$conn=null;
?>