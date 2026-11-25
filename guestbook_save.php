<!DOCTYPE html>
<head>
</head>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">
<style type = text/css>
a:link {font-size:18pt; text-decoration:none; color:#FFFFFF}
a:visited {font-size:18t; text-decoration:none; color:#FFFFFF}
a:hover {font-size:18pt; text-decoration:none; color:#FFFFFF}
a:active {font-size:18pt; text-decoration:none; color:#FFFFFF}
</style>
<body>
<?
$gtname=$_POST[gtname];
$gbcontent=$_POST[gbcontent];

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname = "gktwjd";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
     die("DB connetion problem." . mysqli_connect_error());


} else{


mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");    

$sql= "insert into guestbook (guestname,content) values (?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $gtname,$gbcontent);


if($_POST['gtname']!=null&&$_POST['gbcontent']!=null){

$stmt->execute();

 echo "<script> alert(\"방명록이 작성 되었습니다.\"); location.href='http://gktwjd.dothome.co.kr/guestbook.php'; </script>";

}else{

 echo "<script> alert(\"내용을 입력해 주세요.\"); location.href='http://gktwjd.dothome.co.kr/guestbook.php'; </script>";

}

$conn->close();

}


?>
</body>
</html>