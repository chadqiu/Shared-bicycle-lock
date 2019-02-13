<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
<body style="font-size:50px;">
		
 <div style="text-align: center;">
 	<?php
$servername = "47.106.156.87";
$username = "root";
$password = "312013";
$dbname = "students";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败，请重试");
} 

$sql = "SELECT state,notice FROM lock_ where id=1";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($row['notice'])
{
  echo '<br>'.'开锁已完成';
  $sql = "update lock_ set notice=0 where id = 1";
  do
  {
  	 $result = $conn->query($sql);
  }
  while(!$result);
}
else
{
    if($row['state'])
	echo '<br>'.'当前锁的状态为：'.'<br>'.'开'.'<br>';
	else
	echo '<br>'.'当前锁的状态为：'.'<br>'.'关'.'<br>';	
}
header("Refresh:5;url=http://www.qyc2018.top/lock/query_android.php");
$conn->close();

?>
 </div>
</body>
</html>



