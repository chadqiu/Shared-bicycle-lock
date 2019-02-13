<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>flag</title>
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
    die("连接失败: " . $conn->connect_error);
} 


$sql = "SELECT flag FROM lock_ where id=1";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($row['flag'])
echo 'lockflag1';
else
echo 'lockflag0';

$conn->close();

?>
 </div>
	</body>
</html>



