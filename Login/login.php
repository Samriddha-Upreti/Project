<?php
session_start();
include '../database/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    try{
        $stmt = $conn->prepare("Select * FROM UserTable WHERE UserName=:username");
        $stmt->execute();
        $user=$stmt->fetch(PDO::FETCH_ASSOC);
        if ($user){
            if(password_verify($password,$user["password"])){
                $_SESSION["UserName"] = $username;
                echo"Login Sucessful. Welcome, $username";
            }else{echo"Invalid login credentials";}
        

        }else{echo"Invalid login credentials";}

    }catch(PDOException $e){die("ERROR".$e->getMessage());}
}$conn=null;
?>