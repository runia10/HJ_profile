<html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge"  charset="utf-8">
</head>

<title>  </title>

<body> 



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
?>

<script>
window.onload=function(){if(confirm("게시글을 삭제 하시겠습니까?")){
<?$sql="Delete from board where boardnum='$bdnum';";?>;
alert("게시글이 삭제 되었습니다.");
location.href="http://gktwjd.dothome.co.kr/board_list.php"; }else{location.href="http://gktwjd.dothome.co.kr/board_list.php";}}
</script>

<?php

$result = mysqli_query($conn,$sql);
mysqli_close($conn);

?>



</body>

</html>