<!doctype html>


<head>	
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">
</head>
<style>
table {               
            border: 1px solid black;
}
</style>
<body>

<p><b><font size="6" color="purple" >LIST</font></b></p>

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

$sql="select gbnum,gbdate,guestname,content from guestbook;";

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) 
{

while($row =mysqli_fetch_assoc($result))
{

/*echo "<script>";
echo "function confdel(){";
echo  "if(confirm(\"방명록 글을 삭제 하시겠습니까?\")){";
echo "location.href='http://gktwjd.dothome.co.kr/guestbook_delete.php?gbnum=".$row["gbnum"]."';}}</script>";
*/
echo "<table border=\"1\"bordercolor=\"black\"><tr><td>".$row["gbnum"]."번째 방명록</td></tr><tr><td>작성자: ".$row["guestname"]."</td></tr><tr><td>작성일시: ".$row["gbdate"]. "</td></tr><tr><td>작성내용: ".$row["content"]."</td></tr>";
echo "<tr><td><input type=\"button\" value=\"삭제\" onclick= \"location.href='http://gktwjd.dothome.co.kr/guestbook_delete.php?gbnum=".$row["gbnum"]."'\"></td></tr></table>";

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