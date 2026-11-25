<!DOCTYPE html>
<meta http-equiv="x-ua-compatible" content="IE=edge" charset="utf-8">
<script>
function gbsub(){

location.href='http://gktwjd.dothome.co.kr/guestbook.php'; 
submit();

}
</script>

<head>
</head>

<style type = text/css>
a:link {font-size:18pt; text-decoration:none; color:#FFFFFF}
a:visited {font-size:18t; text-decoration:none; color:#FFFFFF}
a:hover {font-size:18pt; text-decoration:none; color:#FFFFFF}
a:active {font-size:18pt; text-decoration:none; color:#FFFFFF}
</style>
<body>
<p><b><font size="10" color="purple"> GUESTBOOK</font></b></p>
<form action="guestbook_save.php" method="post">
<p>작성자:<input type ="text" cols="100" rows="50" name="gtname"></textarea></P>
<p>내용:<textarea cols="30" rows="15" name="gbcontent"></textarea>
<input type="submit" value="저장" onclick="gbsub()"></P>
</form>
<p><iframe width="300" height="500" src="http://gktwjd.dothome.co.kr/guestbook_list.php"></p>


</body>
</html>
