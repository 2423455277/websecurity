<?php
$pass=$_POST['password'];
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
$sql = "SELECT password FROM users WHERE email='2423455277@qq.com'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row['password']==$pass){


if( isset( $_POST[ 'Change' ] ) ) {
	// Get input
	$pass_new  = $_POST[ 'password_new' ];
	$pass_conf = $_POST[ 'password_conf' ];
	if( $pass_new == $pass_conf ){
		mysqli_query($conn,"UPDATE users SET password=$pass_new
		WHERE email='2423455277@qq.com'");
	}
}
echo "密码修改成功";
}
else{
	echo "原密码错误";
}
?>