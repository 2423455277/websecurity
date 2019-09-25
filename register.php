<?php
require "mysql.php";
$username=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$conn=new Mysql();
$sql="INSERT INTO users (email,username,password)VALUES ('{$email}','{$username}','{$password}')";
$result=$conn->sql($sql);
    if($result){
        echo "注册成功";
    }
 
$conn->close();