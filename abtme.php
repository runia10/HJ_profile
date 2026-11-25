<html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8" >
</head>
<title>  </title>


<body> 

<p><b><font size="10" color="purple">About me...</font></b></p>

<p>이름: 김하정</p>

<p>국적:한국인</p>

<p>주소: 한국 서울특별시</p>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202404.21945731383!2d126.84946482619108!3d37.56528939857218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca28b61c565cd%3A0x858aedb4e4ea83eb!2z7ISc7Jq47Yq567OE7Iuc!5e0!3m2!1sko!2skr!4v1530413892550" width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

<p>생년월일: 1991.11.13</p>

<p>혈액형: O형</p>

<p>취미:사진찍기, 그림그리기, 악기연주</p>

<p>좋아하는 음식: 스파게티</p>

<p>SNS:</p>
<p> <a target="_blank" href="http://instabio.cc/hahaj91">여기를 클릭하세요!!</a></p>
        
<?php 

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname= "gktwjd";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
     die("DB connetion problem." . mysqli_connect_error());


} else{


mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");

$ipaddress = $_SERVER["REMOTE_ADDR"];

$sql= "insert into visitor_count (visitip) values (?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$ipaddress);
$stmt->execute();
$conn->close();

}
?>

<?php 

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname= "gktwjd";

$conn1 = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
     die("DB connection problem." . mysqli_connect_error());
}

mysqli_query($conn1,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");

$sql1="select max(visitcount) from visitor_count";

$result = mysqli_query($conn1,$sql1);


if (mysqli_num_rows($result) > 0) 
{

while($row =mysqli_fetch_row($result))
{


echo "<p>TOTAL VISITOR:".$row[0]."</p>";

}
}
else {

echo "no result";

}


mysqli_close($conn1);



?>


</body>

</html>