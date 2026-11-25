<html>

<head>
<meta http-equiv="x-ua-compatible" content="IE=edge"  charset="utf-8">
</head>
<title>  </title>

<body> 

<p><b><font size="10" color = "purple" >ART WORKS...</font></b></p>

<?php

echo "<div style=\"margin-left:200px;  position:absolute; left:\" ><iframe name=\"showimg\" src=\"http://gktwjd.dothome.co.kr/images/artwork/butterfly.jpg\" width=\"800px\" height=\"800px\"></iframe></div>";

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

$sql="select imgnum , imgname, imgaddr from image;";
$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
while($row =mysqli_fetch_assoc($result)){

echo "<p><font face=\"arial\">".$row["imgnum"].".</font></p>";

echo "<p><a href=".$row["imgaddr"]." target=\"showimg\"><img width=\"150\" height=\"90\"  src=".$row["imgaddr"]."></a></p>";

echo "<p><fontface=\"arial\">".$row["imgname"]."</font></p>";

echo "</div>";
}
}else {

echo "no result";

}

mysqli_close($conn);


?> 


 



</body>

</html>