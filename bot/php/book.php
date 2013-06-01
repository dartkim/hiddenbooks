<?
$conn = mysql_connect("localhost", "root", "newpassword");

if(!$conn || empty($_GET['id'])) {
	exit();
}

mysql_query("use hiddenbooks");	
$res = mysql_query("select * from book_log where id = ".$_GET['id']);

while( ($row = mysql_fetch_array($res)) ){
	echo $row[json];
}


mysql_close($conn);
?>