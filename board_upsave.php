<!doctype html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">	
	
</head>

<body>
 <?php

$upbdnum=$_POST[bnumup];
$upwriter=$_POST[writerup];
$uptitle=$_POST[titleup];
$upcontent=$_POST[contentup];

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname = "gktwjd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");
    

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE board SET writer='$upwriter', title='$uptitle', content='$upcontent'  WHERE boardnum='$upbdnum';";

if ($conn->query($sql) === TRUE) {

echo "<script> alert(\"게시글이 수정 되었습니다.\"); location.href='http://gktwjd.dothome.co.kr/board_list.php'; </script>";

} else {
  echo "글 수정 실패하였습니다. " . $conn->error;
}

$conn->close();

?> 

</body>
</html>

