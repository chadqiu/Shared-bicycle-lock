<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>关锁网页</title>
	</head>
	<body style="font-size:50px;">
		
 <div style="text-align: center;">
 	<?php
$servername = "localhost";
$username = "root";
$password = "*****";
$dbname = "students";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "update lock_ set state=0 where id = 1";
$result = $conn->query($sql);
if(!$result)
echo'失败'.'<br>';
else
echo'成功'.'<br>';
$conn->close();
?>
 </div>
	</body>
</html>



