<html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge"  charset="utf-8">
</head>
<style>
.ttal{
	text-align: justify;
	text-align-last:left;
}


</style>

<body> 

<table>


<?php

$servername = "localhost";

$username = "gktwjd";

$password = "kim335021";

$dbname= "gktwjd";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
     die("DB connection problem." . mysqli_connect_error());
}


$bdnum=$_GET[bnum];

mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");


$sql="select boardnum, content, dateandtime ,writer,title from board where boardnum='$bdnum';";

$result = mysqli_query($conn,$sql);



if (mysqli_num_rows($result) > 0) 
{

while($row =mysqli_fetch_assoc($result))
{


echo "<table width ='700' height='800'>";
echo "<tr bgcolor='pink' height='50'><td><font font color='white'> 글번호:" .$row["boardnum"]. "</font></td>";
echo "<td><font font color='white'> 작성자:"  .$row["writer"]. "</font></td>";
echo "<td><font font color='white'> 작성일시:" .$row["dateandtime"]."</font></td></tr>";
echo "<tr height='50' bgcolor='pink' ><td colspan='3'><font font color='white'> 글제목:".$row["title"]. "<font></td></tr>";
echo "<tr><td bgcolor='pink'><font font color='white'> 글내용: </font></td><td colspan='2'><p class='ttal'>".$row["content"]. "</p></td></tr>";
echo "</table>";


}
}
else {

echo "no result";

}


mysqli_close($conn);



?> 

</table>

<button onclick="location.href='http://gktwjd.dothome.co.kr/board_update.php?bnum=<?=$bdnum?>'">수정</button>
<button onclick="location.href='http://gktwjd.dothome.co.kr/board_delete.php?bnum=<?=$bdnum?>'">삭제</button>
<button onclick="location.href='http://gktwjd.dothome.co.kr/board_list.php'">글목록</button>

</body>

</html>