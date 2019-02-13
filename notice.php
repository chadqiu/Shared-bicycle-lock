<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>开锁网页</title>
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
    die("连接失败: " . $conn->connect_error);
} 

$sql = "SELECT notice FROM lock_ where id=1";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($row['notice'])
echo "<script> alert('关锁已完成') </script>";	
else
echo '<br>'.'未完成开锁：'.'<br>';
	
header("Refresh:5;url=http://www.qyc2018.top/lock/notice.php");
?>
 </div>
	</body>
</html>







<!--
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
<script>
	function checkCookies(){
	document.getElementById("aaa").style.visibility="none";
	setInterval(function(){
		document.forms[0].submit()},10000);
	}
</script>
	<body style="font-size:50px;" >
		<form action="" method="post" style="text-align: center;">  
    	<input type="submit" value="" id="aaa" style="font-size:50px;">
 </form>
 <div style="text-align: center;">
 	<?php
$servername = "47.106.156.87";
$username = "root";
$password = "312013";
$dbname = "students";
 
// 创建连接
do
{
  $conn = new mysqli($servername, $username, $password, $dbname);	
}while($conn->connect_error);
//time_sleep_until(time()+5); // 在20秒后执行后面代码
 	
 	do
 	{
 	  $sql = "SELECT notice FROM lock_ where id=1";
	$result = $conn->query($sql);	
 	}while(!$result);
	$row = mysqli_fetch_array($result);
	if($row['notice'])
	echo "<script> alert('关锁已完成') </script>";	
	else
	echo "失败";
	//$sql = "update lock_ set notice=0 where id = 1";
	//$result = $conn->query($sql);
//header("Refresh:5;url=http://10.18.3.193/www/lock/notice.php");
$conn->close();

?>
<p>sdfshgsjhgfdghdfjg</p>
 </div>
	</body>
</html>-->









<!--<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>开锁网页</title>
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
    die("连接失败: " . $conn->connect_error);
} 

while(1)
{
    $sql = "SELECT notice FROM lock_ where id=1";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if($row['notice'])
echo "<script> alert('关锁已完成') </script>";	
  $sql = "update lock_ set notice=0 where id = 1";
$result = $conn->query($sql);

sleep(5);

}
$conn->close();
?>
 </div>
	</body>
</html>-->
