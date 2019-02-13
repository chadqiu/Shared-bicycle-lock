<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
<body style="font-size:50px;">
		
 <div style="text-align: center;">
 	<?php
$servername = "localhost";
$username = "root";
$password = "312013";
$dbname = "students";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败，请重试");
} 


$sql = "update from lock_ flag=1 where id=1";
$result = $conn->query($sql);
if(!$result)
echo '<br>'.'已开锁';
else
echo '<br>'.'失败，请重试！';


$conn->close();

?>
 </div>
</body>
</html>
