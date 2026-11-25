<!doctype html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">	
	
</head>

<body>
<script language= "javascript" >

function cancw(){

if(confirm("게시글 작성을 취소 하시겠습니까?")==true){

location.href='http://gktwjd.dothome.co.kr/board_list.php';


}

}

function subw(){

if(confirm("게시글 작성을 완료 하시겠습니까?")==true){

submit();

}

}


</script>

<form method="post" action="board_write.php" onsubmit = "return subw();">

<p>작성자 : <input type= "text" name="writer" size = "20"></p>
<p>제목 : <input type= "text" name="title" size = "50"></p>
<p>내용 :  <textarea name="contents" rows = "30" cols="50" ></textarea></p>

<input type = "button" name = "cancel" value="글 작성 취소" onclick= "cancw()">

<input type = "submit" name="submitwrite" value="글 작성 완료" onclick= "submit()"> 

</form>


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
    
$writer=$_POST['writer'];
$title=$_POST['title'];
$content=$_POST['contents'];

$sql= "insert into board (writer,title,content) values (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $writer,$title, $content);


if($_POST['writer']!=null&&$_POST['title']!=null&&$_POST['contents']!=null){

$stmt->execute();

 echo "<script> alert(\"게시글이 작성 되었습니다.\"); location.href='http://gktwjd.dothome.co.kr/board_list.php'; </script>";

}else{

 echo "<script>alert(\"내용을 입력해 주세요.\"); </script>";

}

$conn->close();

}




?>


</body>

</html>