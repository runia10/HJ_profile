<!doctype html>


<head>	
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">
</head>

<body>

<p><b><font size="10" color="purple" >BOARD</font></b></p>

<p><input type = button name = "write" value="글쓰기" onclick="location.href='http://gktwjd.dothome.co.kr/board_write.php'"><p>

<table>
<tr bgcolor = "pink"><th><font color="white">글번호</font></th><th><font color="white">글제목</font></th><th><font color="white">작성자</font></th><th><font color="white">작성일시</font></th></tr>

<?php

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname= "gktwjd";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
     die("DB connection problem." . mysqli_connect_error());
}

mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");

$sql="select boardnum,dateandtime,writer,title from board;";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) 
{

while($row =mysqli_fetch_assoc($result))
{


echo "<tr><td><center>".$row["boardnum"]. "</center></td><td><a href='http://gktwjd.dothome.co.kr/board_read.php?bnum=".$row["boardnum"]."'>".$row["title"]."</a></td>
<td>".$row["writer"]."</td><td>".$row["dateandtime"]."</td>";
echo "<td><button onclick=\"location.href='http://gktwjd.dothome.co.kr/board_read.php?bnum=".$row["boardnum"]."'\">읽기</button>
<button onclick=\"location.href='http://gktwjd.dothome.co.kr/board_update.php?bnum=".$row["boardnum"]."'\">수정</button>
<button onclick=\"location.href='http://gktwjd.dothome.co.kr/board_delete.php?bnum=".$row["boardnum"]."'\">삭제</button></td><tr>";

}
}
else {

echo "no result";

}


mysqli_close($conn);



?> 

</table>


</body>


</html>