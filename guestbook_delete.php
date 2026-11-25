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

$gbnum=$_GET[gbnum];

$sql="Delete from guestbook where gbnum='$gbnum';";

$result = mysqli_query($conn,$sql);

echo "<script> alert(\"방명록 글이 삭제 되었습니다.\"); location.href='http://gktwjd.dothome.co.kr/guestbook_list.php'; </script>";

mysqli_close($conn);

?> 





</body>

</html>