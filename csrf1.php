<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webdb";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
if( isset( $_GET[ 'Change' ] ) ) {
	// Get input
	$pass_new  = $_GET[ 'password_new' ];
	$pass_conf = $_GET[ 'password_conf' ];
	if( $pass_new == $pass_conf ){
		mysqli_query($conn,"UPDATE users SET password=$pass_new
		WHERE email='2423455277@qq.com'");
	}
}
?>
