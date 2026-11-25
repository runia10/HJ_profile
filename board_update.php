<!doctype html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">	
	
</head>

<body>
<script language= "javascript" >

function cancc(){

if(confirm("게시글 수정을 취소 하시겠습니까?")==true){

location.href='http://gktwjd.dothome.co.kr/board_list.php';


}

}


function subup(){

if(confirm("게시글 수정을 완료 하시겠습니까?")==true){
 
submit();

}

}


</script>


<?php 

$bdnum=$_GET[bnum];

$servername = "localhost";
$username = "gktwjd";
$password = "kim335021";
$dbname= "gktwjd";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
     die("DB connetion problem." . mysqli_connect_error());


} else{


mysqli_query($conn,"SET character_set_results = 'utf8', 
	character_set_client = 'utf8', character_set_connection = 'utf8', 
	character_set_database = 'utf8', character_set_server = 'utf8'");



$sql="select writer, title, content, boardnum from board where boardnum='$bdnum';";


$result = mysqli_query($conn,$sql);



if (mysqli_num_rows($result) > 0) 
{

while($row =mysqli_fetch_assoc($result))
{

echo "<form method=\"post\" action=\"board_upsave.php\">";
echo "<p>작성자 : <input type= \"text\" name=\"writerup\" size = \"20\" value=\"".$row["writer"]."\"></p>";
echo "<p>제목 : <input type= \"text\" name=\"titleup\" size = \"50\" value=\"".$row["title"]."\"></p>";
echo "<p>내용 : <textarea name=\"contentup\" rows = \"30\" cols=\"50\">".$row["content"]."</textarea></p>";
echo "<input type =\"hidden\" name=\"bnumup\" value=\"".$row["boardnum"]."\"></p>";
echo "<input type = \"button\" name = \"cancelup\" value=\"글 수정 취소\" onclick= \"cancc()\">";
echo "<input type =\"submit\" name=\"submitwriteup\" value=\"글 수정 완료\" onclick= \"subup()\">";
echo "</form>";

}

}
else {

echo "no result";

}



}




?>


</body>

</html>